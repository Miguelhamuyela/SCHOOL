@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Máquina Física')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/maquina_fisica/list') }}">Listar Máquina Física</a>
                    > Detalhes de Máquina Física -> {{ $physical_machines->name }}
                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">
            <div class="col-12 mt-2">
                <h5 class=""><b>Informações sobre Máquina Física </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome da Máquina Física</b><br>
                            <small> {{ $physical_machines->name }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>IP da Máquina Física</b><br>
                            <small> {{ $physical_machines->ip }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Sistema Operativo da Máquina Física</b><br>
                            <small> {{ $physical_machines->so }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Espaço do disco da Máquina Física</b><br>
                            <small> {{ $physical_machines->diskSpace }}</small>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Memória da Máquina Física </b><br>
                            <small> {{ $physical_machines->memory }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b> CPU da Máquina Física </b><br>
                            <small> {{ $physical_machines->cpu }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Storage da Máquina Física</b><br>
                            <small> {{ $physical_machines->storage }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Estado da Máquina Física</b><br>
                            <small> {{ $physical_machines->status }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome da Hack</b><br>
                            <small> {{ $physical_machines->hacks->namehack }}</small>
                        </p>
                    </div>



                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Tipo de Cliente ou Empresa</b><br>
                            <small> {{ $physical_machines->clienttype }}</small>
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
                            {{ $physical_machines->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $physical_machines->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/maquina_fisica/edit/{$physical_machines->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>
                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $physical_machines->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.extras.modal.delete.maquina_fisica.index')
@endsection
