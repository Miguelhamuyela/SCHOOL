<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Hack;
use App\Models\Hacker;
use App\Models\PhysicalMachine;
use Illuminate\Http\Request;

class PhysicalMachineController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {
        $response['physical_machines'] = PhysicalMachine::get();
        return view('admin.PhysicalMachine.list.index', $response);
    }

    public function create()
    {

        $response['customers'] = Customer::get();
        $response['hacks'] = Hack::get();
        $response['physical_machines'] = PhysicalMachine::get();
        return view('admin.PhysicalMachine.create.index',$response);

    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'ip' => 'required|string|max:200',
            'diskSpace' => 'max:20',
            'so' => 'required|string|max:50',
            'memory' => 'required|string|max:100',
            'cpu' => 'required|string|max:255',
            'autoRestart' => 'required|string|max:255',
            'storage' => 'required|string|max:255',
            'clienttype' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'fk_hacks_id' => 'required|string|max:255',
            'fk_customers_id' => 'required|string|max:255',
        ]);

        $physical_machines = PhysicalMachine::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');

    }


    public function show($id)
    {
      //  $response['customers'] = Customer::get();
       // $response['hacks'] = Hack::get();
        $response['physical_machines'] = PhysicalMachine::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Maquina Virtual  com o identificador ' . $id);
        return view('admin.PhysicalMachine.details.index', $response);
    }

    public function edit($id)
    {

        $response['customers'] = Customer::get();
        $response['hacks'] = Hack::get();
        $response['physical_machines'] = PhysicalMachine::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Maquina do Backup  com o identificador ' . $id);
        return view('admin.PhysicalMachine.edit.index', $response);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'ip' => 'required|string|max:200',
            'diskSpace' => 'max:20',
            'so' => 'required|string|max:50',
            'memory' => 'required|string|max:100',
            'cpu' => 'required|string|max:255',
            'autoRestart' => 'required|string|max:255',
            'storage' => 'required|string|max:255',
            'clienttype' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'fk_hacks_id' => 'required|string|max:255',
            'fk_customers_id' => 'required|string|max:255',
        ]);

        PhysicalMachine::find($id)->update($request->all());

        return redirect()
            ->route('admin.physical_machines.list.index')
            ->with('edit', '1');



    }

    public function destroy($id)
    {
        PhysicalMachine::find($id)->delete();
        $this->Logger->log('info', 'Eliminou uma Maquina do backup com o identificador ' . $id);
        return  redirect()->route('admin.physical_machines.list.index')->with('destroy', '1');
    }
}
