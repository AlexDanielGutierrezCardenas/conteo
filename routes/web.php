<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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
    return view('welcome');
});

Auth::routes();

//User Routes
Route::middleware(['auth','user-role:user'])->group(function()
{
    Route::get("/home",[App\Http\Controllers\HomeController::class, 'userHome'])->name("home");
});

//Admin Routes
Route::middleware(['auth','user-role:admin'])->group(function()
{
    Route::get("/admin/home",[App\Http\Controllers\HomeController::class, 'adminHome'])->name("admin.home");
    Route::get("/admin/candidato",[App\Http\Controllers\CandidatoController::class, 'adminCandidato'])->name("candidato");
    Route::get('/admin/recintos', [App\Http\Controllers\RecintosController::class, 'index'])->name('recintos.index');
    // Route::resource('/admin/votos_todos', App\Http\Controllers\VotosTodosController::class)->except(['show']);
    Route::resource('/admin/votos_todos', App\Http\Controllers\VotosTodosController::class)
    ->only(['index', 'store', 'update', 'destroy', 'showGraph']);
    Route::resource('/admin/resultados', App\Http\Controllers\ResultadosController::class)
    ->only(['index', 'store', 'update', 'destroy', 'showGraph']);

});

Route::resource('images', ImageController::class);
