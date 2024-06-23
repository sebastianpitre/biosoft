<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Ave;
use App\Models\Avistamiento;


use Illuminate\Http\Request;

class ControllerBase extends Controller
{
    public function getSharedData()
    {
        $userCount = User::count();
        $aveCount = Ave::count();
        $aves = Ave::all();
        $aveAleatoria = Ave::inRandomOrder()->first();
        $avistamientosTotales = Avistamiento::sum('numero_avistamientos');

        // $aveMayorAvistamientos = DB::table('avistamientos')
        //     ->join('aves', 'avistamientos.ave_id', '=', 'aves.id')
        //     ->select('aves.nombre_comun', 'aves.nombre_cientifico', 'aves.imagen', DB::raw('SUM(avistamientos.numero_avistamientos) as total_avistamientos'))
        //     ->groupBy('aves.id', 'aves.nombre_comun', 'aves.nombre_cientifico', 'aves.imagen')
        //     ->orderBy('total_avistamientos', 'desc')
        //     ->first();

        // $aveMenorAvistamientos = DB::table('avistamientos')
        //     ->join('aves', 'avistamientos.ave_id', '=', 'aves.id')
        //     ->select('aves.nombre_comun', 'aves.nombre_cientifico', 'aves.imagen', DB::raw('SUM(avistamientos.numero_avistamientos) as total_avistamientos'))
        //     ->groupBy('aves.id', 'aves.nombre_comun', 'aves.nombre_cientifico', 'aves.imagen')
        //     ->havingRaw('COUNT(avistamientos.id) = 1') // filtrar especies con 1 avistamiento
        //     ->orderBy('total_avistamientos', 'asc')
        //     ->first();

        
        $aveMayorAvistamientos = DB::table('avistamientos')
        ->join('aves', 'avistamientos.ave_id', '=', 'aves.id')
        ->select('aves.id', 'aves.nombre_comun', 'aves.nombre_cientifico', 'aves.imagen', DB::raw('SUM(avistamientos.numero_avistamientos) as total_avistamientos'))
        ->groupBy('aves.id', 'aves.nombre_comun', 'aves.nombre_cientifico', 'aves.imagen')
        ->orderBy('total_avistamientos', 'desc')
        ->first();
    
        $aveMenorAvistamientos = DB::table('avistamientos')
        ->join('aves', 'avistamientos.ave_id', '=', 'aves.id')
        ->select('aves.id', 'aves.nombre_comun', 'aves.nombre_cientifico', 'aves.imagen', DB::raw('SUM(avistamientos.numero_avistamientos) as total_avistamientos'))
        ->groupBy('aves.id', 'aves.nombre_comun', 'aves.nombre_cientifico', 'aves.imagen')
        ->orderBy('total_avistamientos', 'asc')
        ->first();
    
        

        $datosMapa = DB::table('avistamientos')
            ->join('areas', 'avistamientos.area_id', '=', 'areas.id')
            ->select('areas.lat', 'areas.log', DB::raw('count(*) as total'))
            ->groupBy('areas.lat', 'areas.log')
            ->get();

        $avistamientosArea = Avistamiento::select('area_id', DB::raw('sum(numero_avistamientos) as total'))
            ->groupBy('area_id')
            ->get();


        return compact('datosMapa', 'aveAleatoria', 'avistamientosArea', 'userCount', 'aveCount', 'avistamientosTotales', 'aves', 'aveMayorAvistamientos', 'aveMenorAvistamientos');  
    }
}
