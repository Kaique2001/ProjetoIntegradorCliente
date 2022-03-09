<?php

use Illuminate\Support\Facades\Route;
use App\Models\produtos;

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

Route::get('/', function () {
    return view('consultaacervo');
});
Route::get('/Carrinho', function () {
    return view('Carrinho');
});
Route::get('/faleConosco', function () {
    return view('faleConosco');
});
Route::get('/cadastrarprodutos', function () {
    $chocolate = new produtos();
    $chocolate->nome = "Chocolate";
    $chocolate->save();
    return produto::all();
});