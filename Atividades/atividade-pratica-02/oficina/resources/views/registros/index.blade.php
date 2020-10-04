@extends('principal')

@section('conteudo')
    <a href="{{ route('registros.create') }}">Cadastrar</a>
    <table class="table table-bordered table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Data Limite</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registros as $r)
                <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->descricao }} </td>
                    <td>{{ $r->datalimite }} </td>
                    <td>{{ $r->tipo }} </td>
                    <td>{{ $r->equipamento->nome }} </td>
                    <td><a href="{{route('registros.show', $e->id)}}">Exibir</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection