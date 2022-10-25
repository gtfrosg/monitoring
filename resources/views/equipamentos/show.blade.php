@extends('main')
@section('content')

<div class="card">
    <div class="card-header font-weight-bold">
        Equipamentos
    </div>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nome:</th>
      <th scope="col">Mesa em que está localizado:</th>
      <th scope="col">Posição:</th>
      <th scope="col">Sala:</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><a href="/equipamentos/{{ $equipamento->id }}">{{ $equipamento->hostname }}</a></td>
      <td>{{ $equipamento->mesa }}</td>
      <td>{{ $equipamento->posicao }}</td>
      <td>{{ $equipamento->sala->nome }}</td>
      <td align="center">
        <a href="/equipamentos/{{$equipamento->id}}/edit"><i class="fas fa-pencil-alt" color="#007bff"></i></a>
      <form method="POST" action="/equipamentos/{{$equipamento->id}}/">
        @csrf
        @method('delete')
            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir o equipamento?');" style="background-color: transparent;border: none;"><i class="far fa-trash-alt" color="#007bff"></i></button>
      </form></td>
    </tr>
  </tbody>
</table>
</div>

@endsection