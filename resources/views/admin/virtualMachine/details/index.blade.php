@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Máquina Virtual')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/maquina_virtual/list') }}">Listar Máquina Virtual</a>
                    > Detalhes de Máquina Virtual -> {{ $virtual_machines->name }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12 mt-2">
                <h5 class=""><b>Informações sobre Máquina Virtual </b> </h5>
                <hr>
            </div>


            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome da Máquina Virtual</b><br>
                            <small> {{ $virtual_machines->name }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>IP da Máquina Virtual</b><br>
                            <small> {{ $virtual_machines->ip }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Sistema Operativo da Máquina Virtual</b><br>
                            <small> {{ $virtual_machines->so }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Espaço do disco da Máquina Virtual</b><br>
                            <small> {{ $virtual_machines->diskSpace }}</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Memória da Máquina Virtual </b><br>
                            <small> {{ $virtual_machines->memory }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b> CPU da Máquina Virtual </b><br>
                            <small> {{ $virtual_machines->cpu }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Storage da Máquina Virtual</b><br>
                            <small> {{ $virtual_machines->storage }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Estado da Máquina Virtual</b><br>
                            <small> {{ $virtual_machines->status }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome da Rack</b><br>
                            <small> {{ $virtual_machines->hacks->namehack }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome do Cliente</b><br>
                            <small> {{ $virtual_machines->customers->name }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Tipo de Cliente ou Empresa</b><br>
                            <small> {{ $virtual_machines->clienttype }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Máquina Física</b><br>
                            <small> {{ $virtual_machines->physical_machines->name }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Início do Contrato</b><br>
                            <small> {{ $virtual_machines->startContract }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Fim do Contrato</b><br>
                            <small> {{ $virtual_machines->endContract }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Certificado</b><br>
                            <small> {{ $virtual_machines->certificate }}</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 my-5">
                <hr>
                <div class="row">

                    <div class="col-md-8">
                        <small class="mb-1 text-dark">
                            <b>Data de Cadastro:</b>
                            {{ $virtual_machines->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $virtual_machines->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/maquina_virtual/edit/{$virtual_machines->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>
                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $virtual_machines->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.extras.modal.delete.virtual_machines.index')
@endsection
