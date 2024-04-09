<div class="col-md-4">
    <div class="form-group">
        <label for="accommodation">Nome do Domínio<small class="text-danger"></small></label>
        <input type="text" name="accommodation" id="accommodation"
            value="{{ isset($domains->accommodation) ? $domains->accommodation : old('accommodation') }}"
            class="form-control border rounded" placeholder="Nome do Domínio" required>
    </div>
</div>

<div class="col-md-4">
    <div class="form-group">
        <label for="customers">Selecione a Empresa ou Cliente<small class="text-danger"></small></label>
        <select name="fk_customers_id" class="form-control" aria-label="Default select example">
            <option disabled> Selecione a Empresa ou Cliente</option>
            @foreach ($customers as $item)
                <option di value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
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

<div class="col-md-4">
    <div class="form-group">
        <label for="email">Possui Email<small class="text-danger"></small></label>
        <input type="text" name="email" id="email"
            value="{{ isset($domains->writeemail) ? $domains->email : old('email') }}"
            class="form-control border rounded" placeholder="Escrever o Email" >
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <div class="form-group">
            <label for="certificate">Certificado da Máquina Virtual<small class="text-danger"></small></label>
            <input type="text" name="certificate" id="certificate"
                value="{{ isset($domains->certificate) ? $domains->certificate : old('certificate') }}"
                class="form-control border rounded" placeholder="Certificado da Máquina Virtual" required>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="startContract">Início do Contrato<small class="text-danger"></small></label>
        <input type="date" name="startContract" id="startContract"
            value="{{ isset($domains->startContract) ? $domains->startContract : old('startContract') }}"
            class="form-control border rounded" placeholder="Início do Contrato" required>
    </div>
</div>
<div class="col-md-4">
    <div class="form-group">
        <label for="endContract">Fim do Contrato<small class="text-danger"></small></label>
        <input type="date" name="endContract" id="endContract"
            value="{{ isset($domains->endContract) ? $domains->endContract : old('endContract') }}"
            class="form-control border rounded" placeholder="Fim do Contrato" required>
    </div>
</div>
<div class="col-md-12">
    <label for="description"> <small class="text-danger"></small></label>
    <textarea name="description" placeholder="Descrição sobre o Domínio"class="form-control rounded"
        style="min-height:50px; min-width:100%" required>{{ isset($domains->description) ? $domains->description : old('description') }}</textarea>
</div>

<!-- /.col -->
