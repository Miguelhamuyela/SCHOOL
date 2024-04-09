@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes da Máquina de Backup')

@section('content')

    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/maquina_backup/list') }}">Listar Máquina de Backup</a>
                    > Detalhes de Máquina de Backup -> {{ $veeam_backups->name }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12 mt-2">
                <h5 class=""><b>Informações sobre Máquina de Backup </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome da Máquina de Backup</b><br>
                            <small> {{ $veeam_backups->name }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>IP da Máquina de Backup</b><br>
                            <small> {{ $veeam_backups->machineIp }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Nome da Máquina Virtual</b><br>
                            <small> {{ $veeam_backups->virtual_machines->name }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Descrição da Máquina de Backup</b><br>
                            <small> {{ $veeam_backups->obs }}</small>
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
                            {{ $veeam_backups->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $veeam_backups->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/maquina_backup/edit/{$veeam_backups->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>
                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $veeam_backups->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.extras.modal.delete.veeam_backups.index')
@endsection
