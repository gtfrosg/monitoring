<form>
  <div class="row justify-content-md-left">
      <div class="col col-lg-2">
        <label for="nome">Nome de máquina:</label>
            <input type="text" name="hostname" value="{{ old('hostname', $equipamento->hostname) }}">
      </div>
      
      <div class="col col-lg-2">
        <label for="sala">Mesa em que está localizado:</label>
            <input type="text" name="mesa" value="{{ old('mesa', $equipamento->mesa) }}">
      </div>

      <div class="col col-lg-2">
        <label for="sala">Posição:</label><br>
            <input type="text" name="posicao" value="{{ old('posicao', $equipamento->posicao) }}">
      </div>

      <div class="form-group">
        <label for="sala_id"><b>Local</b></label>
          <select name="sala_id">
            @if (count($salas) > 1)
             <option value="" selected="">Selecione a sala ...</option>
            @endif
            @foreach ($salas as $sala)
              <option value="{{ $sala->id }}"
              {{ ( old('sala_id') == $sala->id ) ? 'selected' : '' }}> {{ $sala->nome }}
              </option>
            @endforeach
          </select>
      </div>

    </div><br>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>