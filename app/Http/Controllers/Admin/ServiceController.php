<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['services'] = Service::get();
        //Logger
        $this->Logger->log('info', 'Listou um Pedido');
        return view('admin.service.list.index', $response);
    }


    public function create()
    {
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar um Pedido');
        return view('admin.service.create.index');
    }


    public function store(Request $request)
    {
        $services = Service::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');
    }


    public function show($id)
    {
        $response['services'] = Service::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um Pedido  com o identificador ' . $id);
        return view('admin.service.details.index', $response);
    }


    public function edit($id)
    {
        $response['services'] = Service::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um Pedido com o identificador ' . $id);
        return view('admin.service.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        Service::find($id)->update($request->all());
        return redirect()
            ->route('admin.services.list.index')
            ->with('edit', '1');

    }


    public function destroy($id)
    {
        Service::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um Pedido com o identificador ' . $id);
        return  redirect()->route('admin.services.list.index')->with('destroy', '1');
    }
}
