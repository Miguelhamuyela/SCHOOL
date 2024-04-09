<div class="col-md-4">
    <div class="form-group">
        <label for="course">Nome da Máquina de Backup<small class="text-danger"></small></label>
        <input placeholder="Nome da Máquina de Backup" type="text" name="name" id="veeam_backups"
            value="{{ isset($veeam_backups->name) ? $veeam_backups->name : old('name') }}" class="form-control border"
            required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="machineIp">Ip da Máquina de Backup <small class="text-danger"></small></label>
        <input placeholder="Ip da Máquina de Backup" type="text" name="machineIp"
            value="{{ isset($veeam_backups->machineIp) ? $veeam_backups->machineIp : old('machineIp') }}" id="machineIp"
            class="form-control border" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="course">Selecione a Máquina Virtual <small class="text-danger"></small></label>
        <select name="fk_virtual_machines_id" class="form-control" aria-label="Default select example">
            <option disabled>Selecione a Máquina Virtual</option>
            @foreach ($virtual_machines as $item)
                <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="col-md-12">
    <label for="obs"> <small class="text-danger"></small></label>
    <textarea name="obs" placeholder="Descrição sobre Máquina de Backup"class="form-control rounded"
        style="min-height:50px; min-width:100%" required>{{ isset($veeam_backups->obs) ? $veeam_backups->obs : old('obs') }}</textarea>
</div>
<!-- /.col -->
