<ul>
    <li>Id do equipamento: {{ $equipamento->id }}</li>
    <li>Id da mesa: {{ $equipamento->mesa_id }}</li>
</ul>
@foreach($equipamento->status as $statu)
  <ul>
    <li>Id do status associado: {{ $statu->id }}</li>
  </ul>
@endforeach
