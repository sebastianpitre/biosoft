<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

use App\Models\Ave;
use App\Models\Area;
use App\Models\Avistamiento;




class AveController extends Controller
{
    public function __construct(){
        $this->middleware('can:aves')->only('index');
        $this->middleware('can:aves.edit')->only('edit', 'update');
        $this->middleware('can:aves.create')->only('create', 'store');

    }

    public function index()
    {
        $aves = Ave::all();

        $totalAvistamientosPorAve = Avistamiento::select('ave_id', DB::raw('sum(numero_avistamientos) as total'))
        ->groupBy('ave_id')
        ->get();

        $aves = $aves->map(function ($ave) use ($totalAvistamientosPorAve) {
            $matchingAvistamientos = $totalAvistamientosPorAve->where('ave_id', $ave->id);
            if ($matchingAvistamientos->isNotEmpty()) {
                $ave->avistamientos_totales = $matchingAvistamientos->first()->total;
            } else {
                $ave->avistamientos_totales = 0;
            }
            return $ave;
        });

        return view('aves.index', compact('aves'));
    }




    public function create()
    {
        return view('aves.create');
    }

    public function store(Request $request)
    {
        // Validar los datos de entrada
        $request->validate([
            'nombre_cientifico' => 'required|string|max:255',
            'nombre_comun' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'imagen' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        

        $ave = new Ave;
        $ave->nombre_comun = $request->input('nombre_comun');
        $ave->nombre_cientifico = $request->input('nombre_cientifico');
        $ave->descripcion = $request->input('descripcion');

        if($request->hasfile("imagen")){
            $imagen = $request->file("imagen");
            $nomimagen = str::slug($request->nombre_cientifico).".".$imagen->guessExtension();
            $ruta = public_path("imagenes/aves/");
            $imagen->move($ruta,$nomimagen);
            $ave->imagen = $nomimagen;
        }
    
        


        $ave->save();

        if ($ave->id) {
            $notificacion = "Se ha registrado correctamente";
        } else {
            $notificacion = "Ha ocurrido un error al registrar la información";
        }

        return redirect()->route('aves')->with(compact('notificacion'));
    }

    
  


    

    public function edit($id)
    {
        $ave = Ave::findOrFail($id);
        return view('aves.edit', compact('ave'));
    }

    public function update(Request $request, Ave $ave)
    {
        $request->validate([
            'nombre_comun' => 'required',
            'nombre_cientifico' => 'required',
            'descripcion' => 'nullable',
            'imagen' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nomimagen = Str::slug($request->nombre_cientifico) . '.' . $imagen->getClientOriginalExtension();
            $ruta = public_path('imagenes/aves/');
            $imagen->move($ruta, $nomimagen);
            $ave->imagen = $nomimagen;
        }

        $ave->nombre_comun = $request->nombre_comun;
        $ave->nombre_cientifico = $request->nombre_cientifico;
        $ave->descripcion = $request->descripcion;

        $ave->save();

        $notificacion = "Se ha editado correctamente";

        return redirect()->route('aves')->with(compact('notificacion'));
    }

    public function destroy($id)
    {
        $ave = Ave::findOrFail($id); 
    
        // Borrar la imagen si existe
        if ($ave->imagen) {
            $ruta_imagen = public_path('imagenes/aves/' . $ave->imagen);
            if (file_exists($ruta_imagen)) {
                unlink($ruta_imagen);
            }
        }
    
        $ave->avistamientos()->delete();
        $ave->delete();
    
        $notificacion = "Se ha eliminado el registro con éxito";
    
        return redirect()->route('aves')->with(compact('notificacion'));
    }
    

    // public function show($id)
    // {
    //     $ave = Ave::findOrFail($id);
    //     $areas = Area::all();
    //     $avistamientos = Avistamiento::all();

    //     // Obtener avistamiento total de cada ave
    //     $totalAvistamientosPorAve = Avistamiento::select('ave_id', DB::raw('sum(numero_avistamientos) as total'))
    //         ->groupBy('ave_id')
    //         ->get();

    //     $matchingAvistamientos = $totalAvistamientosPorAve->where('ave_id', $ave->id);
    //     if ($matchingAvistamientos->isNotEmpty()) {
    //         $ave->avistamientos_totales = $matchingAvistamientos->first()->total;
    //     } else {
    //         $ave->avistamientos_totales = 0;
    //     }

    //     // Obtener avistamientos por área para la ave actual
    //     $avistamientosPorArea = Avistamiento::select('area_id', DB::raw('sum(numero_avistamientos) as total'))
    //         ->where('ave_id', $id)
    //         ->groupBy('area_id')
    //         ->get();

    //     return view('aves.show', compact('ave', 'areas', 'avistamientosPorArea'));

    // }
    
    public function show($id)
    {
        $ave = Ave::findOrFail($id);
        $totalAvistamientos = Avistamiento::where('ave_id', $id)->sum('numero_avistamientos');
        $areas = Area::all();
        $years = Avistamiento::selectRaw('distinct YEAR(fecha) as year')->orderBy('year', 'desc')->get();
        $avistamientosPorArea = collect();
        $avistamientosTotalPorArea = collect();
    
        $selectedYear = request('year');
        $totalAvistamientosAnio = 0;
        if ($selectedYear) {
            $totalAvistamientosAnio = Avistamiento::where('ave_id', $id)
                ->whereYear('fecha', $selectedYear)
                ->sum('numero_avistamientos');
        }
    
        foreach($areas as $area) {
            $query = Avistamiento::selectRaw('sum(numero_avistamientos) as total')
                        ->where('ave_id', $id)
                        ->where('area_id', $area->id);
            $totalQuery = Avistamiento::selectRaw('sum(numero_avistamientos) as total')
                        ->where('ave_id', $id)
                        ->where('area_id', $area->id);
    
            if ($selectedYear) {
                $query->whereYear('fecha', $selectedYear);
                $totalQuery->whereYear('fecha', $selectedYear);
            }
            
            $result = $query->first();
            $totalResult = $totalQuery->first();
            $avistamientosPorArea->push([
                'area_id' => $area->id,
                'total' => $result ? $result->total : 0,
            ]);
            $avistamientosTotalPorArea->push([
                'area_id' => $area->id,
                'total' => $totalResult ? $totalResult->total : 0,
            ]);
        }
    
        return view('aves.show', compact('ave', 'totalAvistamientos', 'totalAvistamientosAnio', 'areas', 'years', 'avistamientosPorArea', 'avistamientosTotalPorArea'));
    }
    

    


    






}
