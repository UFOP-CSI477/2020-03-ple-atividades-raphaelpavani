@extends('principal')

@section('conteudo')

<h1>Dados do registro</h1>

<p>Id: {{ $registro->id }}</p>
<p>Nome: {{ $registro->nome }}</p>


<a href="{{route('registros.edit', $registro->id)}}">Editar</a>

<a href="{{route('registros.index')}}">Voltar</a>

<form name="frmDelete"
    action="{{ route('registros.destroy', $registro->id)}}"
    method="post"
    onsubmit="return confirm('Confirma a exclusão do registro?');">

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

</form>

@endsection