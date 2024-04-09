<?php

namespace App\Http\Controllers\Admin;

use App\Classes\Logger;
use App\Http\Controllers\Controller;
use App\Models\Backup;
use App\Models\Client;
use App\Models\Customer;
use App\Models\Employee;
use App\Models\EquipmentRepair;
use App\Models\Log;
use App\Models\ManufacturesSoftware;
use App\Models\PhysicalMachine;
use App\Models\Requeste;
use App\Models\Startup;
use App\Models\User;
use App\Models\VeeamBackup;
use App\Models\VirtualMachine;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* contadores */
        $response['user'] = User::count();
        $response['veeam_backups'] = VeeamBackup::count();
        $response['virtual_machines'] = VirtualMachine::count();
        $response['customers'] = Customer::count();
        $response['physical_machines'] = PhysicalMachine::count();
        $response['manufacturesSoftware'] = ManufacturesSoftware::count();
        $response['requests'] = Requeste::count();
        /* fim contadores */

 /**graficos de estudantes */
 $jan = VirtualMachine::whereMonth('created_at', '=', 01)->count();
 $response['jan'] = json_encode($jan);
 $fev = VirtualMachine::whereMonth('created_at', '=', 02)->count();
 $response['fev'] = json_encode($fev);
 $mar = VirtualMachine::whereMonth('created_at', '=', 03)->count();
 $response['mar'] = json_encode($mar);
 $abr = VirtualMachine::whereMonth('created_at', '=', 04)->count();
 $response['abr'] = json_encode($abr);
 $maio = VirtualMachine::whereMonth('created_at', '=', 05)->count();
 $response['maio'] = json_encode($maio);
 $jun = VirtualMachine::whereMonth('created_at', '=', 06)->count();
 $response['jun'] = json_encode($jun);
 $jul = VirtualMachine::whereMonth('created_at', '=', 07)->count();
 $response['jul'] = json_encode($jul);
 $ago = VirtualMachine::whereMonth('created_at', '=', '08')->count();
 $response['ago'] = json_encode($ago);
 /**d */
 $set = VirtualMachine::whereMonth('created_at', '=', '09')->count();
 $response['set'] = json_encode($set);
 $out = VirtualMachine::whereMonth('created_at', '=', '10')->count();
 $response['out'] = json_encode($out);
 $nov = VirtualMachine::whereMonth('created_at', '=', 11)->count();
 $response['nov'] = json_encode($nov);
 $dez = VirtualMachine::whereMonth('created_at', '=', 12)->count();
 $response['dez'] = json_encode($dez);

        return view('admin.home.index', $response);
    }
}
