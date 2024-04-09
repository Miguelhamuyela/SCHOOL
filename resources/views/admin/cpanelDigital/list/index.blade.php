@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Cpanel do Digital ')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-10">
                        <h5><b>Lista de Cpanel do Digital </b></h5>
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="{{ route('admin.digital_cpanels.create.index') }}" class="btn btn-primary">Cadastrar</a>
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
                                    <th>SUBDOMÍNIO</th>
                                    <th>USUÁRIO</th>
                                    <th>PACOTE</th>
                                    <th>ENTIDADE</th>
                                    <th>ACÇÕES</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($digital_cpanels as $item)
                                    <tr class="text-center text-dark">
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->subdomain }} </td>
                                        <td>{{ $item->username }} </td>
                                        <td>{{ $item->packages }}
                                        <td>{{ $item->entity }} </td>
                                        <td>
                                            <a href='{{ url("admin/digital_cpanel/show/{$item->id}") }}' type="button"
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
