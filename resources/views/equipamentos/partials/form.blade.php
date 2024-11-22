<div class="row justify-content-md-left">
    {{-- adicionando um select para selecionar as mesas para o cadastro de equipamentos --}}
    <div class="select-spacing">
        <label for="mesa_id">Mesa:</label>
        <select name="mesa_id" id="mesa_id">
            @foreach ($mesas as $mesa)
                <option value="{{ $mesa->id }}">{{ $mesa->id }}</option>
            @endforeach
        </select>
    </div>
    <div class="select-spacing">
        <label for="status_id">Status que deseja associar ao equipamento:</label>
        <select name="status_id" id="status_id">
            @foreach ($status as $statu)
                <option value="{{ $statu->id }}">{{ $statu->id }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</div>
