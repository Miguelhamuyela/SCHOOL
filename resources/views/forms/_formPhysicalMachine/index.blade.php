
 <div class="col-md-6">
    <div class="form-group">
        <label for="name">Nome do Hack <small class="text-danger"></small></label>
        <select name="fk_hacks_id" class="form-control"
        aria-label="Default select example">
        <option disabled>Selecione a Hack</option>
        @foreach ($hacks as $item)
            <option value="{{ $item->id }}">{{ $item->namehack }}</option>
        @endforeach
    </select>
    </div>
</div>


<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="name">Nome da Máquina Física<small class="text-danger"></small></label>
            <input type="text" name="name" id="name"
                value="{{ isset($physical_machines->name) ? $physical_machines->name : old('name') }}"
                class="form-control border rounded" placeholder="Nome da Máquina Física" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="ip">IP da Máquina Física<small class="text-danger"></small></label>
            <input type="text" name="ip" id="ip"
                value="{{ isset($physical_machines->ip) ? $physical_machines->ip : old('ip') }}"
                class="form-control border rounded" placeholder="IP" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="clienttype">Tipo de Cliente <small class="text-danger"></small></label>
            <select type="text" name="clienttype" id="clienttype" class="form-control border rounded" required>
                @if (isset($physical_machines->clienttype))
                    <option value="{{ $physical_machines->clienttype }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $physical_machines->clienttype }}
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
            <label for="memory">Memória da Máquina Física<small class="text-danger"></small></label>
            <input type="text" name="memory" id="memory"
                value="{{ isset($physical_machines->memory) ? $physical_machines->memory : old('memory') }}"
                class="form-control border rounded" placeholder="Memoria" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="cpu">CPU da Máquina Física<small class="text-danger"></small></label>
            <input type="text" name="cpu" id="cpu"
                value="{{ isset($physical_machines->cpu) ? $physical_machines->cpu : old('cpu') }}"
                class="form-control border rounded" placeholder="Unidade Central de Processamento(CPU)" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="so">Sistema Operativo da Máquina Física <small class="text-danger"></small></label>
            <input type="so" name="so" id="so"
                value="{{ isset($physical_machines->so) ? $physical_machines->so : old('so') }}"
                class="form-control border rounded" placeholder="Sistema Operativo" required>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="storage">Storage<small class="text-danger"></small></label>
            <input type="text" name="storage" id="storage"
                value="{{ isset($physical_machines->storage) ? $physical_machines->storage : old('storage') }}"
                class="form-control border rounded" placeholder="Storage" required>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <div class="form-group">
                <label for="diskSpace">Espaço no Disco da Máquina Física<small class="text-danger"></small></label>
                <input type="text" name="diskSpace" id="diskSpace"
                    value="{{ isset($physical_machines->diskSpace) ? $physical_machines->diskSpace : old('diskSpace') }}"
                    class="form-control border rounded" placeholder="Espaço no Disco" required>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="status">Estado da Máquina  Física<small class="text-danger"></small></label>
            <select type="text" name="status" id="status" class="form-control border rounded" required>

                @if (isset($physical_machines->clienttype))
                    <option value="{{ $physical_machines->status }}" class="text-primary h6 bg-primary text-white"
                        selected>
                        {{ $physical_machines->status }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option>Activo</option>
                <option>Desactivo</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="autoRestart">Reinício Automático da Máquina Física
                <small class="text-danger"></small></label>
            <select type="text" name="autoRestart" id="autoRestart" class="form-control border rounded" required>
                @if (isset($physical_machines->autoRestart))
                    <option value="{{ $physical_machines->autoRestart }}"
                        class="text-primary h6 bg-primary text-white" selected>
                        {{ $physical_machines->autoRestart }}
                    </option>
                @else
                    <option disabled selected value="">selecione uma outra opção</option>
                @endif
                <option>On</option>
                <option>Off</option>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="name">Nome do Cliente/Empresa da Maquina Física<small class="text-danger"></small></label>
            <select name="fk_customers_id" class="form-control" aria-label="Default select example">
                <option disabled> Selecione a Empresa ou Cliente</option>
                @foreach ($customers as $item)
                    <option di value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
<!-- /.col -->
