@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Máquina Virtual ')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Máquina Virtual </b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.virtual_machines.create') }}" class="btn btn-primary">Cadastrar</a>
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
                                    <th>MÁQUINA</th>
                                    <th>IP</th>
                                    <th>SO</th>
                                    <th>ESPAÇO DO DISCO</th>
                                    <th>MEMÓRIA</th>
                                    <th>CPU</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($virtual_machines as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }} </td>
                                        <td>{{ $item->ip }} </td>
                                        <td>{{ $item->so }} </td>
                                        <td>{{ $item->diskSpace }} </td>
                                        <td>{{ $item->memory }} </td>
                                        <td>{{ $item->cpu }} </td>

                                        <td>
                                            <a href='{{ url("admin/maquina_virtual/show/{$item->id}") }}' type="button"
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
