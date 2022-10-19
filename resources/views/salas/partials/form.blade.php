<form>
  <div class="row justify-content-md-left">
      <div class="col col-lg-2">
        <label for="nome">Nome:</label>
            <input type="text" name="nome" value="{{ old('nome', $sala->nome) }}">
      </div>

    </div><br>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>