<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\CpanelInfosi;
use Illuminate\Http\Request;

class CpanelInfosiController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }
    public function index()
    {
        $response['cpanel_infosis'] = CpanelInfosi::get();
        //Logger
        $this->Logger->log('info', 'Listou um domínio do Infosi ');
        return view('admin.cpanelInfosi.list.index', $response);
    }

  
    public function create()
    {
         //Logger
         $this->Logger->log('info', 'Entrou em Cadastrar um domínio do Infosi');
         return view('admin.cpanelInfosi.create.index');
    }


    public function store(Request $request)
    {
        $cpanel_infosis = CpanelInfosi::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');
    }


    public function show($id)
    {
        $response['cpanel_infosis'] = CpanelInfosi::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um domínio do Infosi  com o identificador ' . $id);
        return view('admin.cpanelInfosi.details.index', $response);
    }


    public function edit($id)
    {
        $response['cpanel_infosis'] = CpanelInfosi::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar um domínio do Infosi  com o identificador ' . $id);
        return view('admin.cpanelInfosi.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        CpanelInfosi::find($id)->update($request->all());
        return redirect()
            ->route('admin.cpanel_infosis.list.index')
            ->with('edit', '1');
    }


    public function destroy($id)
    {
        CpanelInfosi::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um domínio do Infosi  com o identificador ' . $id);
        return  redirect()->route('admin.cpanel_infosis.list.index')->with('destroy', '1');
    }
}
