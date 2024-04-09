<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\FisicMachine;
use App\Models\Hack;
use App\Models\Mfisic;
use App\Models\PhysicalMachine;
use App\Models\VirtualMachine;
use Illuminate\Http\Request;

class virtualMachineController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger;
    }

    public function index()
    {



        $response['virtual_machines'] = VirtualMachine::get();
        //Logger
        $this->Logger->log('info', 'Listou a Maquina Vertual');
        return view('admin.virtualMachine.list.index', $response);
    }

    public function create()
    {
        $response['customers'] = Customer::get();
        $response['virtual_machines'] = VirtualMachine::get();
        $response['physical_machines'] = PhysicalMachine::get();
        $response['hacks'] = Hack::get();
        //Logger
        $this->Logger->log('info', 'Entrou em Cadastrar a Maquina Virtual');
        return view('admin.virtualMachine.create.index', $response);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'ip' => 'required|string|max:255',
            'diskSpace' => 'max:255',
            'so' => 'required|string|max:255',
            'memory' => 'required|string|max:255',
            'cpu' => 'required|string|max:255',
            'autoRestart' => 'required|string|max:255',
            'storage' => 'required|string|max:255',
            'clienttype' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'certificate' => 'required|string|max:255',
            'fk_hacks_id' => 'required|string|max:255',
            'fk_customers_id' => 'required|string|max:255',
            'startContract' => 'required|string|max:255',
            'endContract' => 'required|string|max:255',
        ]);

        $virtual_machines = VirtualMachine::create($request->all());

        return redirect()
            ->back()
            ->with('create', '1');

    }

    public function show($id)
    {
         $response['customers'] = Customer::get();
        $response['virtual_machines'] = VirtualMachine::find($id);
        $response['hacks'] = Hack::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou uma Maquina Virtual  com o identificador ' . $id);
        return view('admin.virtualMachine.details.index', $response);
    }


    public function edit($id)

    {
        $response['physical_machines'] = PhysicalMachine::get();
        $response['customers'] = Customer::get();
        $response['hacks'] = Hack::get();
        $response['virtual_machines'] = VirtualMachine::find($id);
        //Logger
        $this->Logger->log('info', 'Entrou em editar uma Maquina Virtual  com o identificador ' . $id);
        return view('admin.virtualMachine.edit.index', $response);


    }
    public function update(Request $request, $id)
    {
        VirtualMachine::find($id)->update($request->all());
        return redirect()->route('admin.virtual_machines.index')->with('edit', 1);
    }

    public function destroy($id)
    {
        VirtualMachine::find($id)->delete();
        $this->Logger->log('info', 'Eliminou uma Maquina Virtual com o identificador ' . $id);
        return  redirect()->route('admin.virtual_machines.index')->with('destroy', '1');
    }
}
