<ul>
    <li>Largura da Sala: {{ $mesa->largura }}</li>
    <li>Profundidade da Sala: {{ $mesa->profundidade }}</li>
    <li><a href="/mesas/edit/{{ $mesa->id }}">Editar</a></li

  <form action="/mesas/delete/{{ $mesa->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
  </form>
</ul>
