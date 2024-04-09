<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Domain;
use App\Models\VirtualMachine;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    private $Logger;

    public function __construct()
    {
        $this->Logger = new Logger();
    }

    public function index()
    {

        $response['domains'] = Domain::get();
        return view('admin.domain.list.index', $response);
    }


    public function create()
    {
        $response['virtual_machines'] = VirtualMachine::get();
        $response['customers'] = Customer::get();
        $response['domains'] = Domain::get();
        return view('admin.domain.create.index', $response);
    }


    public function store(Request $request)
    {
           // $request->validate([
           //     'accommodation' => 'required|string|max:255',
            //    'email' => 'required|string|max:255',
            ///    'fk_virtual_machines_id' => 'max:50',
            //    'fk_customers_id' => 'required|string|max:50',
           //     'writeemail' => 'required|string|max:255',
            //    'description' => 'required|string|max:255',
            //    'certificate' => 'required|string|max:50',
           //     'startContract' => 'required|string|max:255',
            //    'endContract' => 'required|string|max:255',

          //  ]);

            $domains = Domain::create($request->all());

            return redirect()
                ->back()
                ->with('create', '1');


    }


    public function show($id)
    {
        //$response['virtual_machines'] = VirtualMachine::get();
      //  $response['customers'] = Customer::get();

        $response['domains'] = Domain::with('virtual_machines', 'customers')->find($id);
      //  $response['domains'] = Domain::find($id);
        //Logger
        $this->Logger->log('info', 'Visualizou um Domínio  com o identificador ' . $id);
        return view('admin.domain.details.index', $response);
    }


    public function edit($id)
    {
        $response['virtual_machines'] = VirtualMachine::get();
        $response['customers'] = Customer::get();
        $response['domains'] = Domain::find($id);

        //Logger
        $this->Logger->log('info', 'Entrou em editar um Domínio com o identificador ' . $id);
        return view('admin.domain.edit.index', $response);
    }


    public function update(Request $request, $id)
    {

        Domain::find($id)->update($request->all());

        return redirect()
            ->route('admin.domains.list.index')
            ->with('edit', '1');
    }


    public function destroy($id)
    {
        Domain::find($id)->delete();

        $this->Logger->log('info', 'Eliminou um Dominio com o identificador ' . $id);
        return  redirect()->route('admin.domains.list.index')->with('destroy', '1');
    }
}
