  <div class="row justify-content-md-left">
      <div class="col col-lg-2">
        <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ old('nome', $sala->nome) }}">
      </div><br>
      <div class="col col-lg-2">
        <label for="largura">Altura:</label>
            <input type="text" name="largura" value="{{ old('largura', $sala->largura) }}">
      </div><br>
      <div class="col col-lg-2">
        <label for="profundidade">Largura:</label>
            <input type="text" name="profundidade" value="{{ old('profundidade', $sala->profundidade) }}">
      </div>
    </div><br>
  <button type="submit" class="btn btn-primary">Enviar</button>
