@extends('principal')

@section('conteudo')

<form action="{{ route('registros.store')}}" method="post">

  @csrf

  <div class="form-group">
    <label for="equipamento_id">Ferramenta</label>

    <select name="equipamento_id" id="equipamento_id" class="form-control">

    @foreach($registros as $e)
        <option value="{{$e->id}}">{{$e->nome}}</option>
    @endforeach

    </select>
  <div class="form-group"> 
      <label for="descricao">descricao</label>
      <input type="text" class="form-control" name="descricao" id="descricao" required>
  </div>
  <div class="form-group">
    <label for="datalimite">datalimite</label>
    <input type="date" class="form-control" name="datalimite" id="datalimite" required>
</div>
<div class="form-group">
  <label for="tipo">tipo</label>
  <h2></h2>
  <input type="number" class="form-control" name="tipo" id="tipo" required>
</div>



  <div class="text-right">
      <input type="submit" value="Cadastrar" class="btn btn-primary">
      <input type="reset" value="Limpar" class="btn btn-danger">
  </div>

</form>
@endsection
