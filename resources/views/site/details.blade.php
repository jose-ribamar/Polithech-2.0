@extends('site.layout')
@section('title','Detalhes')
@section('conteudo')

<div class="row container">
    <div class="col s12 m6 ">

        <img src="{{$produto->imagem}}" class="responsive-img">
        
    </div>

    <div class="col s12 m6">
        <h1>{{$produto->nome}}</h1>
        <p>Postato por {{$produto->descricao}}</p> 
        <p>Preço {{ number_format($produto->preco, 2, ',', '.')}} R$</p> 
        <p>Postato por: {{$produto->user->firstName}}</p>  
        <p>Categoria: {{$produto->categoria->nome}}</p>  
        <button class="btn orange btn-la"> Comprar</button>
    </div>

</div>


@endsection