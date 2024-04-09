<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\VeeamBackup;
use App\Models\VirtualMachine;
use Illuminate\Http\Request;

class VeeamBackupController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {

        $response['veeam_backups'] = VeeamBackup::with('virtual_machines')->get();
        //Logger
        $this->Logger->log('info', 'Entrou em Listar a Máquina do Backup');
        return view('admin.VeeamBackup.list.index', $response);
    }


    public function create()
    {
        $response['veeam_backups'] = VeeamBackup::with('virtual_machines')->get();
        $response['virtual_machines'] = VirtualMachine::get();

        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar a Máquina do Backup');
        return view('admin.VeeamBackup.create.index', $response);

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'machineIp' => 'required|string|max:255',
            'fk_virtual_machines_id' => 'max:50',
        ]);

        $veeam_backups = VeeamBackup::create($request->all());
        //Logger
        $this->Logger->log('info', 'Cadastrou Uma Máquina de Backup com o Identificador ' . $veeam_backups->id);
        return redirect()
            ->back()
            ->with('create', '1');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $response['virtual_machines'] = VirtualMachine::get();
        $response['veeam_backups'] = VeeamBackup::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou Uma Máquina de Backup com o identificador ' . $id);
        return view('admin.VeeamBackup.details.index', $response);
    }


    public function edit($id)
    {
        $response['virtual_machines'] = VirtualMachine::get();
        $response['veeam_backups'] = VeeamBackup::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar Uma Máquina de Backup  com o identificador ' . $id);
        return view('admin.VeeamBackup.edit.index', $response);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'machineIp' => 'required|string|max:255',
            'fk_virtual_machines_id' => 'max:50',
        ]);

        VeeamBackup::find($id)->update($request->all());
        //Logger
        $this->Logger->log('info', 'Entrou em Actualizar uma Máquina de Backup  com o identificador ' . $id);
        return redirect()
            ->route('admin.veeam_backups.list.index')
            ->with('edit', '1');

    }


    public function destroy($id)
    {
        VeeamBackup::find($id)->delete();
        $this->Logger->log('info', 'Eliminou uma Maquina do backup com o identificador ' . $id);
        return  redirect()->route('admin.veeam_backups.list.index')->with('destroy', '1');
    }

}
