<div class="col-md-4">
    <div class="form-group">
        <label for="subdomain">Subdomínio<small class="text-danger"></small></label>
        <input type="text" name="subdomain" id="subdomain"
            value="{{ isset($cpanel_infosis->subdomain) ? $cpanel_infosis->subdomain : old('subdomain') }}"
            class="form-control border rounded" placeholder="Subdomínio" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="username">Usuário<small class="text-danger"></small></label>
        <input type="text" name="username" id="username"
            value="{{ isset($cpanel_infosis->username) ? $cpanel_infosis->username : old('username') }}"
            class="form-control border rounded" placeholder="Usúario" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="packages">Pacote<small class="text-danger"></small></label>
        <input type="text" name="packages" id="packages"
            value="{{ isset($cpanel_infosis->packages) ? $cpanel_infosis->packages : old('packages') }}"
            class="form-control border rounded" placeholder="Pacote" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="entity">Entidade<small class="text-danger"></small></label>
        <input type="text" name="entity" id="entity"
            value="{{ isset($cpanel_infosis->entity) ? $cpanel_infosis->entity : old('entity') }}"
            class="form-control border rounded" placeholder="Entidade" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="share">Quota<small class="text-danger"></small></label>
        <input type="text" name="share" id="share"
            value="{{ isset($cpanel_infosis->share) ? $cpanel_infosis->share : old('share') }}"
            class="form-control border rounded" placeholder="Quota" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="bandwidth">Largura de Banda<small class="text-danger"></small></label>
        <input type="text" name="bandwidth" id="bandwidth"
            value="{{ isset($cpanel_infosis->bandwidth) ? $cpanel_infosis->bandwidth : old('bandwidth') }}"
            class="form-control border rounded" placeholder="Pacote" required>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="account">Conta<small class="text-danger"></small></label>
        <select type="text" name="account" id="account" class="form-control border rounded" required>
            @if (isset($cpanel_infosis->account))
                <option value="{{ $cpanel_infosis->account }}" class="text-primary h6 bg-primary text-white" selected>
                    {{ $cpanel_infosis->account }}
                </option>
            @else
                <option disabled selected value="">selecione uma outra opção</option>
            @endif
            <option>Sim</option>
            <option>Não</option>
        </select>
    </div>
</div>
<div class="col-md-12">
    <label for="obs"> <small class="text-danger"></small></label>
    <textarea name="obs" placeholder="Descrição sobre o Cpanel do Infosi"class="form-control rounded"
        style="min-height:50px; min-width:100%">{{ isset($cpanel_infosis->obs) ? $cpanel_infosis->obs : old('obs') }}</textarea>
</div>

<!-- /.col -->
