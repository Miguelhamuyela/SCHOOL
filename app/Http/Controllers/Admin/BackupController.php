<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Backup;
use App\Models\VirtualMachine;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['backups'] = Backup::with('virtual_machines')->get();
        //Logger
        $this->Logger->log('info', 'Entrou em Listar a Máquina do Backup');
        return view('admin.backup.list.index', $response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $response['virtual_machines'] = VirtualMachine::get();
        $response['backups'] = Backup::get();
        return view('admin.backup.create.index',$response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'machineIp' => 'required|string|max:255',
            'fk_virtual_machines_id' => 'max:50',
        ]);

        $backups = Backup::create($request->all());
        //Logger
        $this->Logger->log('info', 'Cadastrou Uma Máquina de Backup com o Identificador ' . $backups->id);
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
        $response['backups'] = Backup::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Maquina de Backup  com o identificador ' . $id);
        return view('admin.backup.details.index', $response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $response['virtual_machines'] = VirtualMachine::get();
        $response['backups'] = Backup::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Maquina do Backup  com o identificador ' . $id);
        return view('admin.backup.edit.index', $response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'machineIp' => 'required|string|max:255',
            'fk_virtual_machines_id' => 'max:50',
        ]);

        Backup::find($id)->update($request->all());

        return redirect()
            ->route('admin.backups.list.index')
            ->with('edit', '1');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Backup::find($id)->delete();
        $this->Logger->log('info', 'Eliminou uma Maquina do backup com o identificador ' . $id);
        return  redirect()->route('admin.backups.list.index')->with('destroy', '1');
    }
}
