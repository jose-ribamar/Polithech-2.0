<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;

class ProdutoController extends Controller
{

    
    
    public function index(){

        $nome = "Ribamar";
        $idade = 22;
        $frutas = ['banana', 'laranja', 'maçã'];
        return view('site/home', compact('nome', 'idade', 'frutas'));
    // $produto = Produto::all();
    // return dd($produto);
    }

    
}
