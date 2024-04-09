@extends('layouts.merge.dashboard')
@section('titulo', ' Detalhes de Cpanel do Infosi')
@section('content')


    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title"><b>
                    <a href="{{ url('admin/cpanel_infosi/list') }}">Listar Cpanel do Infosi</a>
                    > Detalhes do Cpainel do Infosi - {{ $cpanel_infosis->subdomain }}

                </b></h2>
        </div>
    </div>
    <div class="card shadow mb-2">
        <div class="card-body">

            <div class="col-12 mt-2">
                <h5 class=""><b>Informações do Cpanel do Infosi </b> </h5>
                <hr>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Domínio</b><br>
                            <small> {{ $cpanel_infosis->subdomain }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Usuário </b><br>
                            <small> {{ $cpanel_infosis->username }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Pacote</b><br>
                            <small> {{ $cpanel_infosis->packages}}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Entidade</b><br>
                            <small> {{ $cpanel_infosis->entity	 }}</small>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Quota</b><br>
                            <small> {{ $cpanel_infosis->share }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Largura de Banda</b><br>
                            <small> {{ $cpanel_infosis->bandwidth }}</small>
                        </p>
                    </div>

                    <div class="col-md-3">
                        <p class="text-dark">
                            <b>Conta</b><br>
                            <small> {{ $cpanel_infosis->account }}</small>
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
                            {{ $cpanel_infosis->created_at }}
                        </small><br>
                        <small class="mb-1 text-dark">
                            <b>Última Actualização:</b>
                            {{ $cpanel_infosis->updated_at }}
                        </small>
                    </div>
                    <div class="col-md-4 text-dark text-right">
                        <a type="button" class="btn btn-primary text-left text-white mb-2 btn-fw"
                            href='{{ url("admin/cpanel_infosi/edit/{$cpanel_infosis->id}") }}'>
                            <i class="fa fa-edit"></i>
                            Editar
                        </a>
                        <br>

                        <button class="text-left text-white btn btn-danger btn-fw" id="deleteCategoryBtn"
                            value="{{ $cpanel_infosis->id }}">
                            <i class="fa fa-trash"></i>
                            Eliminar
                        </button>

                    </div>
                </div>

            </div>
        </div>
    </div>
    @include('admin.extras.modal.delete.cpanel_infosi.index')
@endsection
