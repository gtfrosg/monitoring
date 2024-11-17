  <div class="row justify-content-md-left">
{{-- adicionando um select para selecionar as salas para o cadastro de mesas --}}
    <div>
        <label for="sala_id">Sala:</label>
        <select name="sala_id" id="sala_id">
            @foreach ($salas as $sala)
                <option value="{{ $sala->id }}">{{ $sala->nome }}</option>
            @endforeach
        </select>
    </div><br>
      <div class="col col-lg-2">
        <label for="largura">Largura: </label>
            <input type="text" name="largura" value="{{ old('largura', $mesa->largura) }}">
      </div><br>
      <div class="col col-lg-2">
        <label for="profundidade">Profundidade: </label>
            <input type="text" name="profundidade" value="{{ old('profundidade', $mesa->profundidade) }}">
      </div>
    </div><br>
  <button type="submit" class="btn btn-primary">Enviar</button>
