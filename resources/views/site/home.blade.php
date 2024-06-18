@extends('site.layout')

@section('conteudo')
    

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

    @guest
    Não está autenticado
    @endguest
       
         
 @endswitch
@endsection