<div>
    <!-- Acessa os dados de cada mesa usando $sala->mesas | infelizmente não consigo passar uma variavel chamada mesas para ficar mais bonitinho -->
  <h1>Aqui temos as mesas</h1> 
  <br>
  @foreach ($sala->mesas as $mesa)
       <div class="mesa" style="width: {{ (int)$mesa->largura * 50 }}px; height: {{ (int)$mesa->profundidade * 50 }}px; border: 1px solid black;">
       </div><br>
   <p>Dimensões das mesas: {{ $mesa->largura }} x {{ $mesa->profundidade }} metros</p>
   @endforeach
</div>

