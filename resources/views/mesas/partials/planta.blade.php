<div>
    <!-- Acessa os dados de cada mesa usando $mes | infelizmente não consigo passar uma variavel chamada mesas para ficar mais bonitinho -->
  <h1>Aqui temos as mesas</h1> 
  <br>
  @foreach ($mesa as $mes)
       <div class="mesa" style="width: {{ (int)$mes->largura * 50 }}px; height: {{ (int)$mes->profundidade * 50 }}px; border: 1px solid black;">
       </div><br>
   <p>Dimensões das mesas: {{ $mes->largura }} x {{ $mes->profundidade }} metros</p>
   @endforeach
</div>

