<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::any('/', [UsuarioController::class, 'index'])->name('usuario.index');
Route::get('/criar', [UsuarioController::class, 'create'])->name('usuario.create');
Route::get('/editar', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::post('/store', [UsuarioController::class, 'store'])->name('usuario.store');
Route::put('/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::delete('/excluir/{id}', [UsuarioController::class, 'destroy'])->name('usuario.destroy');
