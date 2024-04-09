<div class="col-md-4">
    <div class="form-group">
        <label for="name">Nome da Rack<small class="text-danger"></small></label>
        <input type="text" name="namehack" id="namehack"
            value="{{ isset($hacks->namehack) ? $hacks->namehack : old('namehack') }}" class="form-control border rounded"
            placeholder="Nome do Rack" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="memory">Selecione o Grupo<small class="text-danger"></small></label>
        <select type="text" name="group" id="group" class="form-control border rounded" required>
            @if (isset($hacks->group))
                <option value="{{ $hacks->group }}" class="text-primary h6 bg-primary text-white" selected>
                    {{ $hacks->group }}
                </option>
            @else
                <option disabled selected value="">selecione uma outra opção</option>
            @endif
            <option>A</option>
            <option>B</option>
            <option>C </option>
            <option>D </option>
            <option>E</option>
            <option>F</option>
            <option>G </option>
            <option>H</option>
            <option>I</option>
            <option>J</option>
            <option>L </option>
            <option>M </option>
            <option>O</option>
            <option>P</option>
            <option>Q</option>
            <option>R</option>
        </select>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="email">Número da Rack<small class="text-danger"></small></label>
        <input type="text" name="numberHack" id="numberHack"
            value="{{ isset($hacks->numberHack) ? $hacks->numberHack : old('numberHack') }}"
            class="form-control border rounded" placeholder="Número da  Rack" required>
    </div>
</div>


<div class="col-md-12">
    <label for="obs"> <small class="text-danger"></small></label>
    <textarea name="obs" placeholder="Descrição sobre a Rack"class="form-control rounded"
        style="min-height:50px; min-width:100%" required>{{ isset($hacks->obs) ? $hacks->obs : old('obs') }}</textarea>
</div>
<!-- /.col -->
