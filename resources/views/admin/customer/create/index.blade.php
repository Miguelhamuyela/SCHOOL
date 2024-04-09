@extends('layouts.merge.dashboard')
@section('titulo', 'Lista de Clientes')

@section('content')
    <div class="row">

        <div class="col-lg-12 grid-margin stretch-card ">
            <div class="card">
                <form  method="POST" action="{{ route('admin.customers.store') }}" >
                    @csrf
                <div class="card-body bg-light">
                    <b>
                        <a href="{{ url('admin/cliente/list') }}">Listar Cliente</a> >Cadastrar Cliente
                    </b>
                    <hr>
                    @include('forms._formCustomer.index')
                </div>
                <div class="card-body bg-light">
                    <div class="col-md-12">
                        <div class="form-group text-center">
                            <button type="submit" class="btn px-5 col-md-4 btn-primary">
                                Salvar
                            </button>

                        </div>
                    </div>
            </div>
            </form>
            </div>
        </div>
    </div>
@endsection
