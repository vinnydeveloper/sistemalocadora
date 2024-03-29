@extends('template')

@section('container')
    <h1>Editar um Ator</h1>

    <form action="/ator/editar/{{$ator->ator_id}}" method="post">
    @csrf

    <input type="text" name="ator_id" value="{{$ator->ator_id}}" hidden>
    <input type="text" name="primeiroNome" value="{{$ator->primeiro_nome}}" id="">
    <input type="text" name="segundoNome" value="{{$ator->ultimo_nome}}" id="">
    <button type="submit">Enviar</button>

    </form>
    @if(isset($resultado))
        @if($resultado)
            <h1>Edição Conluida!</h1>
        @else
            <h1>Erro ao tentar editar!</h1>
        @endif
    @endif        

@endsection
