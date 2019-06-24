@extends('template')

@section('container')

<form action="/filme/editar/{{$filme->filme_id}}" method="post">

@csrf
<input type="text" name="filmeId" value="{{$filme->filme_id}}" hidden >

<input type="text" name="filmeTitulo" id="" value="{{$filme->titulo}}">
<button type="submit">Enviar</button>
</form>

@if(isset($resultado))
    @if($resultado)
        <h1>Edição concluida com sucesso!</h1>
    @else 
        <h1>TEve falhas na edição</h1>
    @endif
@endif

@endsection