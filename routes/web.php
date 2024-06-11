<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ProdutoController;

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

// Route::get('/', [ProdutoController::class, 'index'])->name('produto.index');

// Route::get('/produto/{id?}', [ProdutoController::class, 'show'])->name('produto.show');

// Route::group([
//     'prefix'=>'admin', 
//     'as'=> 'admin.'
// ], function(){

// // Route::name('admin.')->group(function(){


    Route::get('admin/dashboard', function(){
    return "dashboard";
    })->name('dashboard');

//     Route::get('admin/user', function(){
//         return "user";
//     })->name('user');

//     Route::get('admin/cliente', function(){
//         return "cliente";
//     })->name('cliente');
// });

// Route::resource('produtos', ProdutoController::class);



// Route::any('/any', function(){
//     return "Permite todo tipo de acesso http(put, delete, get, post)";
// });

// Route::match(['put', 'delet'],'/match',function(){
//     return "Permite apenas acessos definidos";
// });
// Route::get('/produto/{id}/{cat?}',function($id, $cat = 'Limpesa'){
//     return "O id do produto é: ".$id."<br>" . "A categoria é: ".$cat;
// });

// Route::redirect('/sobre', 'empresa');

Route::view('/produto','site/empresa');

Route::get('/produto',function(){
    return view('produto');
});

// Route::get('/novidades', function(){
//     return redirect()->route('noticias');
// });
// 
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';
