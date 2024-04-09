<div class="col-md-4">
    <div class="form-group">
        <label for="name">Solicitante<small class="text-danger"></small></label>
        <input type="text" name="name" id="name"
            value="{{ isset($services->name) ? $services->name : old('name') }}" class="form-control border rounded"
            placeholder="Solicitante" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="tel">Telefone<small class="text-danger"></small></label>
        <input type="text" name="tel" id="tel"
            value="{{ isset($services->tel) ? $services->tel : old('tel') }}" class="form-control border rounded"
            placeholder="Telefone do Solicitante" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="email">Email<small class="text-danger"></small></label>
        <input type="text" name="email" id="email"
            value="{{ isset($services->email) ? $services->email : old('email') }}" class="form-control border rounded"
            placeholder="Email do Solicitante" required>
    </div>
</div>

<div class="col-md-12">
    <div class="form-group">
        <label for="systemName">Nome do Sistema<small class="text-danger"></small></label>
        <input type="text" name="systemName" id="systemName"
            value="{{ isset($services->systemName) ? $services->systemName : old('systemName') }}"
            class="form-control border rounded" placeholder="Nome do Sistema " required>
    </div>
</div>
<div class="col-md-12">
    <label for="obs"> <small class="text-danger"></small></label>
    <textarea placeholder="Descrição sobre  Solicitação "name="obs" class="form-control rounded"
        style="min-height:100px; min-width:100%" required="">{{ isset($services->obs) ? $services->obs : old('obs') }}</textarea>
</div>
<!-- /.col -->
