<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{

    public function CarrinhoLista(){
        $itens = \Cart::getContent();
        dd($itens);
}

public function adicionaCarrinho(Request $request){
    \Cart::add([
        'id' =>  $request->id,
        'name' => $request->name,
        'price' => $request->price,
        'quantity' => $request->quantity,
        'attributes' => array(
            'image' => $request->img
        )
        ]);
}
}
