<form>
  <div class="row justify-content-md-left">
      <div class="col col-lg-2">
        <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ old('nome', $sala->nome) }}">
      </div>
      <div class="col col-lg-2">
        <label for="altura">Altura:</label>
            <input type="text" name="altura" value="{{ old('altura', $sala->altura) }}">
      </div>
      <div class="col col-lg-2">
        <label for="largura">Largura:</label>
            <input type="text" name="largura" value="{{ old('largura', $sala->altura) }}">
      </div>
    </div><br>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>

