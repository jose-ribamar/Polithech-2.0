@extends('site.layout')

@section('conteudo')

<div class="row container">
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title">Card Title</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title">Card Title</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title">Card Title</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
    </div>

    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title">Card Title</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
          </div>
    </div>

</div>




@endsection





{{-- @include('includes.mensagem', ['titulo' => 'Mensagem de sucesso!'])

@component('components.sidebar')

    @slot('paragrafo')
        Texto qualquer do slot
        
    @endslot
@endcomponent

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush --}}

{{-- @foreach ($frutas as $fruta)

    {{$fruta}} <br>
    
@endforeach --}}
    

{{-- {{@isset($nome) ? 'existe' : 'não existe' --}}
    
{{-- @endisset}} --}}

{{-- {{
    $teste ?? 'padrão'
}} --}}

 {{-- @switch($idade)
     @case(21)
         Idade eatá correta
        
     @case(222)
         Idade está errada
         @break
     @default
     default --}}

    {{-- @guest
    Não está autenticado
    @endguest --}}
    {{-- @for($i= 0; $i <= 10; $i++)
        valor atual é {{$i}} <br>
    @endfor --}}

    {{-- @php
       $i = 0; 
    @endphp

    @while ($i <= 10)
        Valor atual {{$i}}

        @php
            $i++
        @endphp
    @endwhile --}}
       
         
 {{-- @endswitch --}}
