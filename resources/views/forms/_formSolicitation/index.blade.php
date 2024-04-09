<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Nome da Empresa ou Solicitante<small class="text-danger"></small></label>
            <input type="text" name="name" id="name"
                value="{{ isset($requests->name) ? $requests->name : old('name') }}"
                class="form-control border rounded" placeholder="Nome do Empresa ou Solicitante" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="memory">Memória da Máquina<small class="text-danger"></small></label>
            <input type="text" name="memory" id="memory"
                value="{{ isset($requests->memory) ? $requests->memory : old('memory') }}"
                class="form-control border rounded" placeholder="Memória da Máquina" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="email">Email<small class="text-danger"></small></label>
            <input type="text" name="email" id="email"
                value="{{ isset($requests->email) ? $requests->email : old('email') }}"
                class="form-control border rounded" placeholder="Email" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="focalPoint">Nome do Ponto Focal<small class="text-danger"></small></label>
            <input type="text" name="focalPoint" id="focalPoint"
                value="{{ isset($requests->focalPoint) ? $requests->focalPoint : old('focalPoint') }}"
                class="form-control border rounded" placeholder=" Nome do Ponto Focal" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="tel">Telefone do Ponto Focal<small class="text-danger"></small></label>
            <input type="text" name="tel" id="tel"
                value="{{ isset($requests->tel) ? $requests->tel : old('tel') }}"
                class="form-control border rounded" placeholder="Telefone do Ponto Focal" required>
        </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for="systemName">Nome do Sistema<small class="text-danger"></small></label>
            <input type="text" name="systemName" id="systemName"
                value="{{ isset($requests->systemName) ? $requests->systemName : old('systemName') }}"
                class="form-control border rounded" placeholder="Nome do Sistema " required>
        </div>
    </div>

</div>
<div class="col-md-12">
    <label for="obs"> <small class="text-danger"></small></label>
    <textarea placeholder="Descrição sobre  Solicitação"name="obs" class="form-control rounded" style="min-height:100px; min-width:100%" required=""></textarea>
</div>
<!-- /.col -->
