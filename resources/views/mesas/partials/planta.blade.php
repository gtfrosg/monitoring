<div>
   @foreach ($mesas as $mesa)
       <div class="mesa" style="width: {{ (int)$mesa->largura * 50 }}px; height: {{ (int)$mesa->profundidade * 50 }}px; border: 1px solid black;">
       </div><br>
   <p>Dimensões das mesas: {{ $mesa->largura }} x {{ $mesa->profundidade }} metros</p>
   @endforeach
</div>

