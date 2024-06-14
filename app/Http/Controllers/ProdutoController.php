<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;

class ProdutoController extends Controller
{
    
    public function index(){
    $produto = Produto::all();
    return dd($produto);
    }
}
