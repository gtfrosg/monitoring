<div class="card">
    <div class="card-header font-weight-bold">
        Salas
    </div>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{ $sala->nome }}</td>
      <td align="center">
        <a href="/salas/{{$sala->id}}/edit"><i class="fas fa-pencil-alt" color="#007bff"></i></a>
      <form method="POST" action="/salas/{{$sala->id}}/">
        @csrf
        @method('delete')
            <button type="submit" onclick="return confirm('Tem certeza que deseja excluir?');" style="background-color: transparent;border: none;"><i class="far fa-trash-alt" color="#007bff"></i></button>
      </form></td>
    </tr>
  </tbody>
</table>
</div>