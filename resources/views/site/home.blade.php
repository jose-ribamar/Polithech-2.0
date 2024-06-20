@extends('site.layout')

@section('conteudo')

<div class="row container">
  @foreach ($produto as $produtos)
    <div class="col s12 m4">
        <div class="card">
            <div class="card-image">
              <img src="{{$produtos->imagem}}">
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <span class="card-title">{{ Str::limit($produtos->nome, 20) }}</span>
              <p>{{ Str::limit($produtos->descricao, 20) }}</p>
            </div>
          </div>
    </div>
  @endforeach
</div>
<div class="row center">
  {{ $produto->links('custom.pagination') }}
</div>

@endsection
