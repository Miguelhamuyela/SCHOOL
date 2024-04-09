<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\CpanelDigital;
use App\Models\CpanelInfosi;
use Illuminate\Http\Request;

class DigitalCpanelController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['digital_cpanels'] = CpanelDigital::get();
        //Logger
        $this->Logger->log('info', 'Listou um domínio do digital ');
        return view('admin.cpanelDigital.list.index', $response);
    }


    public function create()
    {
         //Logger
         $this->Logger->log('info', 'Entrou em Cadastrar um domínio do  digital');
         return view('admin.cpanelDigital.create.index');
    }


    public function store(Request $request)
    {
        $digital_cpanels = CpanelDigital::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');
    }


    public function show($id)
    {
        $response['digital_cpanels'] = CpanelDigital::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou o Domínio do digital  com o identificador ' . $id);
        return view('admin.cpanelDigital.details.index', $response);
    }


    public function edit($id)
    {
        $response['digital_cpanels'] = CpanelDigital::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um domínio do digital  com o identificador ' . $id);
        return view('admin.cpanelDigital.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        CpanelDigital::find($id)->update($request->all());
        return redirect()
            ->route('admin.digital_cpanels.list.index')
            ->with('edit', '1');
    }


    public function destroy($id)
    {
        CpanelDigital::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um domínio do digital  com o identificador ' . $id);
        return  redirect()->route('admin.digital_cpanels.list.index')->with('destroy', '1');
    }
}
