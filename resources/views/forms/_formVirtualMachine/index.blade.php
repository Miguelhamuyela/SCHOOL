<div class="col-md-6">
    <div class="form-group">
        <label for="nif">Selecione a Hack<small class="text-danger"></small></label>
        <select name="fk_hacks_id" class="form-control" aria-label="Default select example">
            <option disabled> Selecione a Hack</option>
            @foreach ($hacks as $item)
                <option di value="{{ $item->id }}">{{ $item->namehack }}</option>
            @endforeach
        </select>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
        <label for="nif">Selecione a Máquina Fisica<small class="text-danger"></small></label>
        <select name="fk_physical_machines_id" class="form-control" aria-label="Default select example">
            <option disabled> Selecione a Máquina Fisica</option>
            @foreach ($physical_machines as $item)
                <option di value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
</div>


<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Nome da Máquina Virtual<small class="text-danger"></small></label>
            <input type="text" name="name" id="name"
                value="{{ isset($virtual_machines->name) ? $virtual_machines->name : old('name') }}"
                class="form-control border rounded" placeholder="Nome da Máquina Virtual" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="ip">IP da Máquina Virtual<small class="text-danger"></small></label>
            <input type="text" name="ip" id="ip"
                value="{{ isset($virtual_machines->ip) ? $virtual_machines->ip : old('ip') }}"
                class="form-control border rounded" placeholder=" IP da Máquina Virtual" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="clienttype">Selecione o Tipo de Cliente <small class="text-danger"></small></label>
            <select type="text" name="clienttype" id="clienttype" class="form-control border rounded" required>
                @if (isset($virtual_machines->clienttype))
                    <option value="{{ $virtual_machines->clienttype }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $virtual_machines->clienttype }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option>Singular</option>
                <option>Prvivada</option>
                <option>Privada e Pública</option>
                <option>Pública</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="memory">Memória da Máquina Virtual<small class="text-danger"></small></label>
            <input type="text" name="memory" id="memory"
                value="{{ isset($virtual_machines->memory) ? $virtual_machines->memory : old('memory') }}"
                class="form-control border rounded" placeholder="Memória da Máquina Virtual" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="cpu">CPU da Máquina Virtual<small class="text-danger"></small></label>
            <input type="text" name="cpu" id="cpu"
                value="{{ isset($virtual_machines->cpu) ? $virtual_machines->cpu : old('cpu') }}"
                class="form-control border rounded" placeholder="Unidade Central de Processamento (CPU)" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="so">Sistema Operativo da Máquina Virtual <small class="text-danger"></small></label>
            <input type="so" name="so" id="so"
                value="{{ isset($virtual_machines->so) ? $virtual_machines->so : old('so') }}"
                class="form-control border rounded" placeholder="Sistema Operativo da Máquina Virtual (SO)" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="storage">Storage da Máquina Virtual<small class="text-danger"></small></label>
            <input type="text" name="storage" id="storage"
                value="{{ isset($virtual_machines->storage) ? $virtual_machines->storage : old('storage') }}"
                class="form-control border rounded" placeholder="Storage da Máquina Virtual" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-group">
                <label for="diskSpace">Espaço no Disco da Máquina Virtual<small class="text-danger"></small></label>
                <input type="text" name="diskSpace" id="diskSpace"
                    value="{{ isset($virtual_machines->diskSpace) ? $virtual_machines->diskSpace : old('diskSpace') }}"
                    class="form-control border rounded" placeholder="Espaço no Disco da Máquina Virtual" required>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="status">Estado da Máquina Virtual<small class="text-danger"></small></label>
            <select type="text" name="status" id="status" class="form-control border rounded" required>

                @if (isset($virtual_machines->clienttype))
                    <option value="{{ $virtual_machines->status }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $virtual_machines->status }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option>Activo</option>
                <option>Desactivo</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="autoRestart">Reinício Automático da Máquina Virtual
                <small class="text-danger"></small></label>
            <select type="text" name="autoRestart" id="autoRestart" class="form-control border rounded" required>
                @if (isset($virtual_machines->autoRestart))
                    <option value="{{ $virtual_machines->autoRestart }}"
                        class="text-primary h6 bg-primary text-white" selected>
                        {{ $virtual_machines->autoRestart }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option>On</option>
                <option>Off</option>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-group">
                <label for="certificate">Certificado da Máquina Virtual<small class="text-danger"></small></label>
                <input type="text" name="certificate" id="certificate"
                    value="{{ isset($virtual_machines->certificate) ? $virtual_machines->certificate : old('certificate') }}"
                    class="form-control border rounded" placeholder="Certificado da Máquina Virtual" required>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="ip">Selecione a Empresa ou Cliente<small class="text-danger"></small></label>
            <select name="fk_customers_id" class="form-control" aria-label="Default select example">
                <option disabled> Selecione a Empresa ou Cliente</option>
                @foreach ($customers as $item)
                    <option di value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label for="startContract">Início do Contrato<small class="text-danger"></small></label>
            <input type="date" name="startContract" id="startContract"
                value="{{ isset($virtual_machines->startContract) ? $virtual_machines->startContract : old('startContract') }}"
                class="form-control border rounded" placeholder="Início do Contrato" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="endContract">Fim do Contrato<small class="text-danger"></small></label>
            <input type="date" name="endContract" id="endContract"
                value="{{ isset($virtual_machines->endContract) ? $virtual_machines->endContract : old('endContract') }}"
                class="form-control border rounded" placeholder="Fim do Contrato" required>
        </div>
    </div>
</div>
<!-- /.col -->
