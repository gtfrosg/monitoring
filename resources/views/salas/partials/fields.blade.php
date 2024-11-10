<ul>
    <li>Nome da sala: {{ $sala->nome }}</li>
    <li>Largura da Sala: {{ $sala->largura }}</li>
    <li>Profundidade da Sala: {{ $sala->profundidade }}</li>
    <li><a href="/salas/edit/{{ $sala->id }}">Editar</a></li>
</ul>

<form action="/salas/delete/{{ $sala->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Tem certeza?');">Apagar</button>
</form>
