
@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Máquina de Backup ')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Máquina de Backup </b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.veeam_backups.create.index') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="dataTable-1" class="table table-striped table-bordered mb-3">
                            <thead class="bg-primary thead-dark">
                                <tr class="text-center ">
                                    <th>#</th>
                                    <th>NOME DA MÁQUINA DE BACKUP</th>
                                    <th>IP DA MÁQUINA DE BACKUP</th>
                                    <th>MÁQUINA VIRTUAL</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($veeam_backups as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->machineIp }} </td>
                                        <td>{{ $item->virtual_machines->name }} </td>

                                        <td>
                                            <a href='{{ url("admin/maquina_backup/show/{$item->id}") }}' type="button"
                                                class="btn btn-icons btn-rounded btn-primary">
                                                <i class="mdi mdi-eye"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




