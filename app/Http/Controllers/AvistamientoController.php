<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ave;
use App\Models\Area;
use App\Models\user;
use App\Models\Avistamiento;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Response;
use Dompdf\Dompdf;




class AvistamientoController extends Controller
{
    public function __construct(){
        $this->middleware('can:avistamientos.index')->only('index');
        $this->middleware('can:avistamientos.store')->only( 'store');

    }

    public function store(Request $request)
    {
        // Validamos los datos del formulario
        $request->validate([
            'fecha' => 'required|date',
            'numero_avistamientos' => 'required|string',
            'area_id' => 'required|string',
            'ave_id' => 'required|integer|exists:aves,id'
        ]);
    
        // Obtenemos el usuario autenticado actualmente
        $usuario = Auth::user();
    
        // Creamos un nuevo avistamiento con los datos del formulario
        $avistamiento = new Avistamiento();
        $avistamiento->fecha = $request->input('fecha');
        $avistamiento->numero_avistamientos = $request->input('numero_avistamientos');
        $avistamiento->ave_id = $request->input('ave_id');
        $avistamiento->area_id = $request->input('area_id');
        
        // Asignamos el nombre y apellido del usuario al avistamiento
        $avistamiento->nombre_usuario = $usuario->name;
        $avistamiento->apellido_usuario = $usuario->apellido;
    
        // Guardamos el nuevo avistamiento en la base de datos
        $avistamiento->save();
    
        $notificacion = "Se ha registrado el avistamiento correctamente";
    
        // Redirigimos de vuelta a la vista show de la ave
        return redirect()->route('aves.show', $avistamiento->ave_id)->with(compact('notificacion'));
    }

    public function pdf(){

        return view('pdf.blade');

    }

    

    public function index(Request $request)
    {
        // Obtener los valores del filtro de la petición
        $ave_id = $request->get('ave_id');
        $area_id = $request->get('area_id');
        $year = $request->get('year');

        // Almacenar los valores del filtro en la sesión
        session()->put('ave_id', $ave_id);
        session()->put('area_id', $area_id);
        session()->put('year', $year);

        // Obtener los valores del filtro de la sesión
        $ave_id = session()->get('ave_id');
        $area_id = session()->get('area_id');
        $year = session()->get('year');

        // Construir la consulta
        $avistamientos = Avistamiento::with('ave')
            ->when($ave_id, function ($query, $ave_id) {
                return $query->where('ave_id', $ave_id);
            })
            ->when($area_id, function ($query, $area_id) {
                return $query->where('area_id', $area_id);
            })
            ->when($year, function ($query, $year) {
                return $query->whereYear('fecha', $year);
            })
            ->selectRaw('ave_id, area_id, fecha, sum(numero_avistamientos) as numero_avistamiento, nombre_usuario, apellido_usuario')
            ->groupBy('ave_id', 'area_id', 'fecha', 'nombre_usuario', 'apellido_usuario')
            ->orderBy('fecha', 'desc');

        // Ejecutar la consulta y obtener los resultados
        $avistamientos = $avistamientos->paginate(50);

        $aves = Ave::orderBy('nombre_comun')->get();
        $areas = Area::orderBy('nombre')->get();
        $years = Avistamiento::selectRaw('YEAR(fecha) as year')->distinct()->orderBy('year', 'desc')->get();

        return view('avistamientos', compact('avistamientos', 'ave_id', 'area_id', 'year', 'aves', 'areas', 'years'));
    }


    public function buscarAves(Request $request)
    {
        $term = $request->input('term');

        $aves = Ave::select('id', 'nombre_comun')
            ->where('nombre_comun', 'LIKE', '%'.$term.'%')
            ->get();

        return response()->json($aves); 
    }

    public function exportarAvistamientos(Request $request)
    {
        $ave_id = $request->get('ave_id');
        $area_id = $request->get('area_id');
        $year = $request->get('year');
    
        $avistamientos = Avistamiento::with('ave')
            ->when($ave_id, function ($query, $ave_id) {
                return $query->where('ave_id', $ave_id);
            })
            ->when($area_id, function ($query, $area_id) {
                return $query->where('area_id', $area_id);
            })
            ->when($year, function ($query, $year) {
                return $query->whereYear('fecha', $year);
            })
            ->selectRaw('ave_id, area_id, fecha, sum(numero_avistamientos) as numero_avistamiento, nombre_usuario, apellido_usuario')
            ->groupBy('ave_id', 'area_id', 'fecha', 'nombre_usuario', 'apellido_usuario')
            ->orderBy('fecha', 'desc')
            ->get(); // Obtener todos los resultados
    
        $archivo = new \SplFileObject(storage_path('app/temp/avistamientos.csv'), 'w');
        $archivo->setCsvControl(',', '"', '\\');
        $archivo->fwrite("\xEF\xBB\xBF");
        $archivo->fputcsv(['Nombre común del ave', 'Nombre científico del ave', 'Nombre del área', 'Fecha', 'Número de avistamientos', 'Nombre del usuario', 'Apellido del usuario'], ';');
    
        foreach ($avistamientos as $avistamiento) {
            $archivo->fputcsv([$avistamiento->ave->nombre_comun, $avistamiento->ave->nombre_cientifico, $avistamiento->area->nombre, $avistamiento->fecha, $avistamiento->numero_avistamiento, $avistamiento->nombre_usuario, $avistamiento->apellido_usuario], ';');
        }
    
        $archivo = null;
    
        $nombre_archivo = 'avistamientos.csv';
    
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="'.$nombre_archivo.'"',
        ];
    
        $ruta_archivo = storage_path('app/temp/avistamientos.csv');
        $contenido = file_get_contents($ruta_archivo);
    
        return response($contenido, 200, $headers);
    }

    public function exportPdf(Request $request)
    {
        $ave_id = $request->get('ave_id');
        $area_id = $request->get('area_id');
        $year = $request->get('year');

        $avistamientos = Avistamiento::with('ave')
            ->when($ave_id, function ($query, $ave_id) {
                return $query->where('ave_id', $ave_id);
            })
            ->when($area_id, function ($query, $area_id) {
                return $query->where('area_id', $area_id);
            })
            ->when($year, function ($query, $year) {
                return $query->whereYear('fecha', $year);
            })
            ->selectRaw('ave_id, area_id, fecha, sum(numero_avistamientos) as numero_avistamiento, nombre_usuario, apellido_usuario')
            ->groupBy('ave_id', 'area_id', 'fecha', 'nombre_usuario', 'apellido_usuario')
            ->orderBy('fecha', 'desc')
            ->get();
        
        $html = view('exportPdf', compact('avistamientos', 'ave_id', 'area_id', 'year'))->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('avistamientos.pdf');
    }

    public function edit($id)
    {
        // Encuentra el avistamiento por su ID
        $avistamiento = Avistamiento::findOrFail($id);
        
        // Devuelve la vista de edición con los datos del avistamiento
        return view('avistamientos.index', compact('avistamiento'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario de edición, similar al método store

        // Encuentra el avistamiento por su ID
        $avistamiento = Avistamiento::findOrFail($id);
        
        // Actualiza los datos del avistamiento con los datos del formulario
        $avistamiento->fecha = $request->input('fecha');
        $avistamiento->numero_avistamientos = $request->input('numero_avistamientos');
       

        // Guarda los cambios en la base de datos
        $avistamiento->save();

        $notificacion = "Se ha editado correctamente";

        // Redirige a alguna vista, por ejemplo, a la vista de detalles del avistamiento actualizado
        return redirect()->route('avistamientos.index', $avistamiento->ave_id)->with(compact('notificacion'));
    }

    public function delete($id)
    {
        // Encuentra el avistamiento por su ID
        $avistamiento = Avistamiento::findOrFail($id);
        
        // Elimina el avistamiento de la base de datos
        $avistamiento->delete();

        $notificacion = "Se ha eliminado el registro con éxito";

        // Redirige a alguna vista, por ejemplo, a la lista de avistamientos
        return redirect()->route('avistamientos.index')->with(compact('notificacion'));
    }


    

    
}
