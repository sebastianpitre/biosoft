<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AveController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AvistamientoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('page_home.welcome');
});

Route::get('/', [App\Http\Controllers\MainController::class, 'index'])->name('welcome');
Route::get('/welcome/especies', [App\Http\Controllers\MainController::class, 'especies'])->name('welcome.especies');
Route::get('/welcome/especies{ave}', [App\Http\Controllers\MainController::class, 'show'])->name('especies.show');
Route::get('/welcome/learm', [App\Http\Controllers\MainController::class, 'areas'])->name('welcome.learm');
Route::get('/welcome/nosotros', [App\Http\Controllers\MainController::class, 'nosotros'])->name('welcome.nosotros');
Route::get('/especies/{ave}', [App\Http\Controllers\MainController::class, 'search'])->where('ave', '[A-Za-z]+');
Route::get('/welcome/especies/search', [App\Http\Controllers\MainController::class, 'search'] )->name('aves.search');


  

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/aves', [App\Http\Controllers\AveController::class, 'index'])->name('aves');
    Route::get('/aves/create', [App\Http\Controllers\AveController::class, 'create'])->name('aves.create');
    Route::post('/aves', [App\Http\Controllers\AveController::class, 'store'])->name('aves.store');
    Route::get('/aves/{ave}/editar', [AveController::class, 'edit'])->name('aves.edit');
    Route::put('/aves/{ave}', [AveController::class, 'update'])->name('aves.update');
    Route::delete('/aves/{ave}', [AveController::class, 'destroy'])->name('aves.destroy');
    Route::get('/aves/{ave}', [AveController::class, 'show'])->name('aves.show');
    Route::get('/aves/buscar', [App\Http\Controllers\AveController::class, 'buscar'] )->name('aves.buscar');

    Route::post('/avistamientos', [App\Http\Controllers\AvistamientoController::class, 'store'])->name('avistamientos.store');
    Route::get('/avistamientos', [App\Http\Controllers\AvistamientoController::class, 'index'])->name('avistamientos.index');
    Route::get('/avistamientos/{avistamiento}/editar', [AvistamientoController::class, 'edit'])->name('avistamientos.edit');
    Route::put('/avistamientos/{avistamiento}', [AvistamientoController::class, 'update'])->name('avistamientos.update');
    Route::delete('/avistamientos/{avistamiento}', [AvistamientoController::class, 'destroy'])->name('avistamientos.destroy');
    Route::get('/avistamientos/exportar', [App\Http\Controllers\AvistamientoController::class, 'exportarAvistamientos'])->name('exportar.avistamientos');
    Route::get('/avistamientos/exportPdf', [App\Http\Controllers\AvistamientoController::class, 'exportPdf'])->name('avistamientos.pdf');
    Route::get('/Pdf', [App\Http\Controllers\AvistamientoController::class, 'Pdf'])->name('pdf');
    
    

    Route::get('/buscar-aves', [AvistamientoController::class, 'buscarAves'])->name('buscar-aves');


    Route::get('/perfil', [App\Http\Controllers\PerfilController::class, 'index'])->name('perfil');
    Route::put('/perfil', [App\Http\Controllers\PerfilController::class, 'update'])->name('perfil.update');
 
    Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios');
    Route::get('/usuarios/create', [App\Http\Controllers\UserController::class, 'create'])->name('usuarios.create');
    Route::post('/usuarios', [App\Http\Controllers\UserController::class, 'store'])->name('usuarios.store');
    Route::get('/usuarios/{user}/editar', [App\Http\Controllers\UserController::class, 'edit'])->name('usuarios.edit');
    Route::put('/usuarios/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('usuarios.update');
    Route::delete('/usuarios/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('usuarios.destroy');

	
});
   






