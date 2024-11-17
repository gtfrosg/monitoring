<h1>{{ $sala->nome }}</h1>

<div class="sala" style="width: {{ (int)$sala->largura * 50 }}px; height: {{ (int)$sala->profundidade * 50 }}px; border: 1px solid black;">
</div>
   <br>
   <p>Dimensões: {{ $sala->largura }} x {{ $sala->profundidade }} metros</p>
