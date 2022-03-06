<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/
', function () {
    return view('pagina.index');
});

Route::get('/resultado/error', function () {
    return view('resultado.error');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('resultado/show/{id}', [App\Http\Controllers\ResultadoController::class, 'show'])->name('resultado.show');
Route::get('paciente/create', [App\Http\Controllers\PacienteController::class, 'create'])->name('paciente.create')->middleware('auth');
Route::post('paciente', [App\Http\Controllers\PacienteController::class, 'store'])->name('paciente.store')->middleware('auth');
Route::get('paciente/indexview', [App\Http\Controllers\PacienteController::class, 'indexview'])->name('paciente.indexview')->middleware('auth');

Route::get('resultado/create', [App\Http\Controllers\ResultadoController::class, 'create'])->name('resultado.create')->middleware('auth');
Route::post('resultado/storeresultadoapp', [App\Http\Controllers\ResultadoController::class, 'storeresultadoapp'])->name('resultado.storeresultadoapp')->middleware('auth');
Route::get('resultado/index', [App\Http\Controllers\ResultadoController::class, 'index'])->name('resultado.index')->middleware('auth');
Route::get('resultado/detail/{id}', [App\Http\Controllers\ResultadoController::class, 'detail'])->name('resultado.detail')->middleware('auth');

