<?php

use App\Http\Controllers\JogadorController;
use App\Http\Controllers\JogoController;
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
// Jogador routes
Route::get('jogadores',[JogadorController::class,'index']);
Route::get('jogador/{id}',[JogadorController::class,'show']);

Route::get('jogador', [JogadorController::class,'create']);
Route::post('jogador', [JogadorController::class,'store']);

Route::get('jogador/{id}/edit', [JogadorController::class, 'edit'])->name('jogador.edit');
Route::post('jogador/{id}/update', [JogadorController::class, 'update'])->name('jogador.update');

Route::get('jogador/{id}/delete', [JogadorController::class, 'delete'])->name('jogador.delete');
Route::post('jogador/{id}/remove', [JogadorController::class, 'remove'])->name('jogador.remove');

// Jogo routes
Route::get('jogos',[JogoController::class,'index']);
Route::get('jogo/{id}',[JogoController::class,'show']);

Route::get('jogo', [JogoController::class,'create']);
Route::post('jogo', [JogoController::class,'store']);

Route::get('jogo/{id}/edit', [JogoController::class, 'edit'])->name('jogo.edit');
Route::post('jogo/{id}/update', [JogoController::class, 'update'])->name('jogo.update');

Route::get('jogo/{id}/delete', [JogoController::class, 'delete'])->name('jogo.delete');
Route::post('jogo/{id}/remove', [JogoController::class, 'remove'])->name('jogo.remove');