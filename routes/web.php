<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('/produto{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');
Route::get('/carrinho', [CarrinhoController::class, 'carrinhoLista'])->name('site.carrinho');
Route::post('/carrinho', [CarrinhoController::class, 'adicionaCarrinho'])->name('site.addcarrinho');
Route::post('/remover', [CarrinhoController::class, 'removeCarrinho'])->name('site.removecarrinho');



// Route::get('/', function(){
//     return redirect()->route('admin.clientes');
// });

// --------------------------------------------------------------

// Route::get('/sobre', function(){
//     return redirect('/empresa');
// } );

// Route::get('/empresa', function(){
//     return view('/empresa');
// } );

// Route::prefix('admin')->group(function(){

// Route::get('dashboard', function(){
//     return "dashboard";
// });

//     Route::get('cliente', function(){
//         return "cliente";
//     });

// }

// );
// // ---------------------------------------------
// Route::redirect('/ola' , '/empresa');

Route::get('/new', function(){
    return view('/new');
})->name('new');

Route::get('/empresa', function(){
    return redirect('/new');
});
