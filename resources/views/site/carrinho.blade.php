@extends('site.layout')
@section('title', 'carrinho')
@section('conteudo')

<div class="row container">

    @if ($mensagem = Session::get('Sucesso'))

        <div class="card green darken-1">
            <div class="card-content white-text">
              <span class="card-title">Parabéns!</span>
              <p>{{ $mensagem }}</p>
            </div>
          </div>

    @endif

    <h1>Seu carrinho possui {{$itens->count()}} produtos. </h1>

  <table class="striped">
    <thead>
      <tr>
          <th></th>
          <th>Name</th>
          <th>Preço</th>
          <th>Quantidades</th>
          <th>Ações</th>
      </tr>
    </thead>

    
    <tbody>
        @foreach ($itens as $item)
      <tr>
        <td> <img src="{{$item->attributes->imagem}}" alt="" width="70" class="responsive-img circle"></td>
        <td>{{ Str::limit($item->name, 30)}}</td>
        <td> R$ {{ number_format($item->price, 2, ',', '.')}}</td>
        <td><input style='width: 40px; font-weight:900;' class="white center" type="number" name="qualitity" value="{{$item->quantity}}"></td>
        <td> 
            <button class="btn-floating waves-effect waves-light orange"><i class="material-icons">refresh</i></a>
               
        <form action="{{ route('site.removecarrinho') }}" method="POST" enctype="multipart/form-data"> 
            {{-- @method('POST') --}}
            @csrf
            <input type="hidden" name="id" value="{{$item->id}}">     
            <button class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
        </form> 
      </tr>
        @endforeach
    </tbody>
  </table>

 <dev class="row container center"></dev>

</div>

<div class="row center">
    <button class="btn waves-effect waves-light blue"> Continuar comprando<i class="material-icons"> arrow_back </i></a>
    <button class="btn waves-effect waves-light blue"> Limpar carrinho<i class="material-icons"> clear </i></a>
    <button class="btn waves-effect waves-light blue"> Finalizar pedido<i class="material-icons"> check </i></a>
    


  {{-- {{$produtos->links('custom.pagination')}} --}}
  
</div>

@endsection
