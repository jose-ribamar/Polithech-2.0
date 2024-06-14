<?php

use App\Http\Controllers\ProdutoController;
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
