<?php

use Illuminate\Support\Facades\Route;


/* Grupo de rotas autenticadas */

Route::middleware(['auth'])->group(function () {

    route::get('/', ['as' => 'admin.home', 'uses' => 'Admin\DashboardController@index']);


    Route::middleware(['Administrador'])->group(function () {

        /* User */
        Route::get('admin/user/index', ['as' => 'admin.user.index', 'uses' => 'Admin\UserController@index']);
        Route::get('admin/user/show/{id}', ['as' => 'admin.user.show', 'uses' => 'Admin\UserController@show'])->withoutMiddleware('Administrador');
        Route::get('admin/user/activity/{id}', ['as' => 'admin.user.activity', 'uses' => 'Admin\UserController@activity'])->withoutMiddleware('Administrador');

        Route::get('admin/user/edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'Admin\UserController@edit'])->withoutMiddleware('Administrador');
        Route::put('admin/user/update/{id}', ['as' => 'admin.user.update', 'uses' => 'Admin\UserController@update'])->withoutMiddleware('Administrador');

        Route::get('admin/user/delete/{id}', ['as' => 'admin.user.delete', 'uses' => 'Admin\UserController@destroy']);
        /* end user */


        /* configuration */
        Route::get('admin/configuration/show', ['as' => 'admin.configuration.show', 'uses' => 'Admin\ConfigurationController@show']);
        Route::get('admin/configuration/edit/{id}', ['as' => 'admin.configuration.edit', 'uses' => 'Admin\ConfigurationController@edit']);
        Route::put('admin/configuration/update/{id}', ['as' => 'admin.configuration.update', 'uses' => 'Admin\ConfigurationController@update']);
        /* end configuration */
        /**------------------------------------------routa solicitação ----------------------------------------------*/
        Route::get('admin/requests/list', ['as' => 'admin.requests.index', 'uses' => 'Admin\RequestController@index']);
        Route::get('admin/requests/create', ['as' => 'admin.requests.create', 'uses' => 'Admin\RequestController@create']);
        Route::post('admin/requests/store', ['as' => 'admin.requests.store', 'uses' => 'Admin\RequestController@store']);
        Route::get('admin/requests/edit/{id}', ['as' => 'admin.requests.edit.index', 'uses' => 'Admin\RequestController@edit']);
        Route::put('admin/requests/update/{id}', ['as' => 'admin.requests.update', 'uses' => 'Admin\RequestController@update']);
        Route::get('admin/requests/delete/{id}', ['as' => 'admin.requests.delete', 'uses' => 'Admin\RequestController@destroy']);
        Route::get('admin/requests/show/{id}', ['as' => 'admin.requests.show', 'uses' => 'Admin\RequestController@show']);
        /*  Route::get('admin/funcionários/cartão/{id}', ['as' => 'admin.employees.card', 'uses' => 'Admin\EmployeeController@card']);
   Route::get('admin/funcionários/GetSubCatAgainstMainCatEdit/{id}', ['as' => 'admin.employees', 'uses' => 'Admin\EmployeeController@GetSubCatAgainstMainCatEdit']);
 */
    });

    Route::middleware(['ManagerFinancial'])->group(function () {

        /**Payments*/
        Route::get('admin/pagamentos/list', ['as' => 'admin.payments.index', 'uses' => 'Admin\PaymentsController@index']);
        Route::get('admin/pagamentos/show/{id}', ['as' => 'admin.payments.show', 'uses' => 'Admin\PaymentsController@show']);
        Route::get('admin/pagamentos/relatorios', ['as' => 'admin.payments.report', 'uses' => 'Admin\PaymentsController@printPayment']);

        /* fatura de Pagamento de Serviço */
        Route::get('admin/pagamentos/fatura/{code}/{service}/{value}/{client}/{status}/{nif}/{lastUpdate}', ['as' => 'admin.payments.invoice', 'uses' => 'Admin\InvoiceController@index']);
        /**End Payments*/

        /** Clients */
        //    Route::get('admin/client/index', ['as' => 'admin.client.create.index', 'uses' => 'Admin\ClientsController@create']);
        //    Route::get('admin/client/list', ['as' => 'admin.client.list.index', 'uses' => 'Admin\ClientsController@index']);
        //   Route::post('admin/client/store', ['as' => 'admin.client.store', 'uses' => 'Admin\ClientsController@store']);
        //  Route::get('admin/client/show/{id}', ['as' => 'admin.client.show', 'uses' => 'Admin\ClientsController@show']);
        //  Route::get('admin/client/edit/{id}', ['as' => 'admin.client.edit.index', 'uses' => 'Admin\ClientsController@edit']);
        //  Route::get('admin/client/delete/{id}', ['as' => 'admin.client.delete', 'uses' => 'Admin\ClientsController@destroy']);
        //   Route::put('admin/client/update/{id}', ['as' => 'admin.client.update', 'uses' => 'Admin\ClientsController@update']);

        //Relatórios PDF
        //   Route::get('admin/clients/relatorios', ['as' => 'admin.clients.report', 'uses' => 'Admin\ClientsController@printClient']);
        /**End Clients */

        /** --------------------------------------------------------Clients -------------------------------------------------*/
        Route::get('admin/cliente/index', ['as' => 'admin.customers.create.index', 'uses' => 'Admin\CustomerController@create']);
        Route::get('admin/cliente/list', ['as' => 'admin.customers.list.index', 'uses' => 'Admin\CustomerController@index']);
        Route::post('admin/cliente/store', ['as' => 'admin.customers.store', 'uses' => 'Admin\CustomerController@store']);
        Route::get('admin/cliente/show/{id}', ['as' => 'admin.customers.show', 'uses' => 'Admin\CustomerController@show']);
        Route::get('admin/cliente/edit/{id}', ['as' => 'admin.customers.edit.index', 'uses' => 'Admin\CustomerController@edit']);
        Route::get('admin/cliente/delete/{id}', ['as' => 'admin.customers.delete', 'uses' => 'Admin\CustomerController@destroy']);
        Route::put('admin/cliente/update/{id}', ['as' => 'admin.customers.update', 'uses' => 'Admin\CustomerController@update']);
        Route::get('admin/clients/relatorios', ['as' => 'admin.clients.report', 'uses' => 'Admin\ClientsController@printClient']);
        //Relatórios PDF
        Route::get('admin/cliente/relatorios', ['as' => 'admin.customers.report', 'uses' => 'Admin\CustomerController@printClient']);
        /**-------------------------------------------------------------------------End Clients ----------------------------------------*/
        /** --------------------------------------------------------dominio -------------------------------------------------*/
        Route::get('admin/dominio/index', ['as' => 'admin.domains.create.index', 'uses' => 'Admin\DomainController@create']);
        Route::get('admin/dominio/list', ['as' => 'admin.domains.list.index', 'uses' => 'Admin\DomainController@index']);
        Route::post('admin/dominio/store', ['as' => 'admin.domains.store', 'uses' => 'Admin\DomainController@store']);
        Route::get('admin/dominio/show/{id}', ['as' => 'admin.domains.show', 'uses' => 'Admin\DomainController@show']);
        Route::get('admin/dominio/edit/{id}', ['as' => 'admin.domains.edit.index', 'uses' => 'Admin\DomainController@edit']);
        Route::get('admin/dominio/delete/{id}', ['as' => 'admin.domains.delete', 'uses' => 'Admin\DomainController@destroy']);
        Route::put('admin/dominio/update/{id}', ['as' => 'admin.domains.update', 'uses' => 'Admin\DomainController@update']);

        //Relatórios PDF
        Route::get('admin/dominio/relatorios', ['as' => 'admin.domains.report', 'uses' => 'Admin\DomainController@printClient']);

        /**-------------------------------------------------------------------------End domains ----------------------------------------*/
        /**-------------------------------------------------------hacks ----------------------------------------------------------------------- */
        Route::get('admin/racks/index', ['as' => 'admin.hacks.create.index', 'uses' => 'Admin\HackController@create']);
        Route::get('admin/racks/list', ['as' => 'admin.hacks.list.index', 'uses' => 'Admin\HackController@index']);
        Route::post('admin/racks/store', ['as' => 'admin.hacks.store', 'uses' => 'Admin\HackController@store']);
        Route::get('admin/racks/show/{id}', ['as' => 'admin.hacks.show', 'uses' => 'Admin\HackController@show']);
        Route::get('admin/racks/delete/{id}', ['as' => 'admin.hacks.delete', 'uses' => 'Admin\HackController@destroy']);
        Route::put('admin/racks/update/{id}', ['as' => 'admin.hacks.update', 'uses' => 'Admin\HackController@update']);
        Route::get('admin/racks/edit/{id}', ['as' => 'admin.hacks.edit.index', 'uses' => 'Admin\HackController@edit']);
        /*------------------------------------------------------------*End hacks ---------------------------------------------------- */

        /**-------------------------------------------------------solicitação ----------------------------------------------------------------------- */
        Route::get('admin/solicitante/index', ['as' => 'admin.services.create.index', 'uses' => 'Admin\ServiceController@create']);
        Route::get('admin/solicitante/list', ['as' => 'admin.services.list.index', 'uses' => 'Admin\ServiceController@index']);
        Route::post('admin/solicitante/store', ['as' => 'admin.services.store', 'uses' => 'Admin\ServiceController@store']);
        Route::get('admin/solicitante/show/{id}', ['as' => 'admin.services.show', 'uses' => 'Admin\ServiceController@show']);
        Route::get('admin/solicitante/delete/{id}', ['as' => 'admin.services.delete', 'uses' => 'Admin\ServiceController@destroy']);
        Route::put('admin/solicitante/update/{id}', ['as' => 'admin.services.update', 'uses' => 'Admin\ServiceController@update']);
        Route::get('admin/solicitante/edit/{id}', ['as' => 'admin.services.edit.index', 'uses' => 'Admin\ServiceController@edit']);
        /*------------------------------------------------------------*End  ---------------------------------------------------- */
        /**-------------------------------------------------------Cpanel_Infosi ----------------------------------------------------------------------- */
        Route::get('admin/cpanel_infosi/index', ['as' => 'admin.cpanel_infosis.create.index', 'uses' => 'Admin\CpanelInfosiController@create']);
        Route::get('admin/cpanel_infosi/list', ['as' => 'admin.cpanel_infosis.list.index', 'uses' => 'Admin\CpanelInfosiController@index']);
        Route::post('admin/cpanel_infosi/store', ['as' => 'admin.cpanel_infosis.store', 'uses' => 'Admin\CpanelInfosiController@store']);
        Route::get('admin/cpanel_infosi/show/{id}', ['as' => 'admin.cpanel_infosis.show', 'uses' => 'Admin\CpanelInfosiController@show']);
        Route::get('admin/cpanel_infosi/delete/{id}', ['as' => 'admin.cpanel_infosis.delete', 'uses' => 'Admin\CpanelInfosiController@destroy']);
        Route::put('admin/cpanel_infosi/update/{id}', ['as' => 'admin.cpanel_infosis.update', 'uses' => 'Admin\CpanelInfosiController@update']);
        Route::get('admin/cpanel_infosi/edit/{id}', ['as' => 'admin.cpanel_infosis.edit.index', 'uses' => 'Admin\CpanelInfosiController@edit']);
        /*------------------------------------------------------------*End  ---------------------------------------------------- */
        /**-------------------------------------------------------digital_cpanel ----------------------------------------------------------------------- */
        Route::get('admin/digital_cpanel/index', ['as' => 'admin.digital_cpanels.create.index', 'uses' => 'Admin\DigitalCpanelController@create']);
        Route::get('admin/digital_cpanel/list', ['as' => 'admin.digital_cpanels.list.index', 'uses' => 'Admin\DigitalCpanelController@index']);
        Route::post('admin/digital_cpanel/store', ['as' => 'admin.digital_cpanels.store', 'uses' => 'Admin\DigitalCpanelController@store']);
        Route::get('admin/digital_cpanel/show/{id}', ['as' => 'admin.digital_cpanels.show', 'uses' => 'Admin\DigitalCpanelController@show']);
        Route::get('admin/digital_cpanel/delete/{id}', ['as' => 'admin.digital_cpanels.delete', 'uses' => 'Admin\DigitalCpanelController@destroy']);
        Route::put('admin/digital_cpanel/update/{id}', ['as' => 'admin.digital_cpanels.update', 'uses' => 'Admin\DigitalCpanelController@update']);
        Route::get('admin/digital_cpanel/edit/{id}', ['as' => 'admin.digital_cpanels.edit.index', 'uses' => 'Admin\DigitalCpanelController@edit']);
        /*------------------------------------------------------------*End  ---------------------------------------------------- */

        /**-------------------------------------------------------------maquina fisica-----------------------------------------------------  */
        //  Route::get('admin/physical_machines/index', ['as' => 'admin.physical_machines.create.index', 'uses' => 'Admin\PhysicalMachineController@create']);
        //  Route::get('admin/physical_machines/list', ['as' => 'admin.physical_machines.list.index', 'uses' => 'Admin\PhysicalMachineController@index']);
        //  Route::post('admin/physical_machines/store', ['as' => 'admin.physical_machines.store', 'uses' => 'Admin\PhysicalMachineController@store']);
        //  Route::get('admin/physical_machines/show/{id}', ['as' => 'admin.physical_machines.show', 'uses' => 'Admin\PhysicalMachineController@show']);
        //  Route::get('admin/physical_machines/delete/{id}', ['as' => 'admin.physical_machines.delete', 'uses' => 'Admin\PhysicalMachineController@destroy']);
        //  Route::put('admin/physical_machines/update/{id}', ['as' => 'admin.physical_machines.update', 'uses' => 'Admin\PhysicalMachineController@update']);
        //  Route::get('admin/physical_machines/edit/{id}', ['as' => 'admin.physical_machines.edit.index', 'uses' => 'Admin\PhysicalMachineController@edit']);
        /**-------------------------------------------------------------End maquina fisica-----------------------------------------------------  */


        /**------------------------------------------------------------------máquina vertual----------------------------------------- */
        Route::get('admin/maquina_backup/list', ['as' => 'admin.backups.index', 'uses' => 'Admin\BackupController@index']);
        Route::get('admin/maquina_backup/create', ['as' => 'admin.backups.create', 'uses' => 'Admin\BackupController@create']);
        Route::post('admin/maquina_backup/store', ['as' => 'admin.backups.store', 'uses' => 'Admin\BackupController@store']);
        Route::get('admin/maquina_backup/edit/{id}', ['as' => 'admin.backups.edit.index', 'uses' => 'Admin\BackupController@edit']);
        Route::put('admin/maquina_backup/update/{id}', ['as' => 'admin.backups.update', 'uses' => 'Admin\BackupController@update']);
        Route::get('admin/maquina_backup/delete/{id}', ['as' => 'admin.backups.delete', 'uses' => 'Admin\BackupController@destroy']);
        Route::get('admin/maquina_backup/show/{id}', ['as' => 'admin.backups.show', 'uses' => 'Admin\BackupController@show']);
        /*  Route::get('admin/funcionários/cartão/{id}', ['as' => 'admin.employees.card', 'uses' => 'Admin\EmployeeController@card']);
      Route::get('admin/maquinaVertual/GetSubCatAgainstMainCatEdit/{id}', ['as' => 'admin.employees', 'uses' => 'Admin\EmployeeController@GetSubCatAgainstMainCatEdit']);
    *


        /**------------------------------------------------------------------máquina vertual----------------------------------------- */
        Route::get('admin/maquina_virtual/list', ['as' => 'admin.virtual_machines.index', 'uses' => 'Admin\virtualMachineController@index']);
        Route::get('admin/maquina_virtual/create', ['as' => 'admin.virtual_machines.create', 'uses' => 'Admin\virtualMachineController@create']);
        Route::post('admin/maquina_virtual/store', ['as' => 'admin.virtual_machines.store', 'uses' => 'Admin\virtualMachineController@store']);
        Route::get('admin/maquina_virtual/edit/{id}', ['as' => 'admin.virtual_machines.edit.index', 'uses' => 'Admin\virtualMachineController@edit']);
        Route::put('admin/maquina_virtual/update/{id}', ['as' => 'admin.virtual_machines.update', 'uses' => 'Admin\virtualMachineController@update']);
        Route::get('admin/maquina_virtual/delete/{id}', ['as' => 'admin.virtual_machines.delete', 'uses' => 'Admin\virtualMachineController@destroy']);
        Route::get('admin/maquina_virtual/show/{id}', ['as' => 'admin.virtual_machines.show', 'uses' => 'Admin\virtualMachineController@show']);

        /**-------------------------------------------------------------maquina de Backup-----------------------------------------------------  */
        Route::get('admin/maquina_backup/index', ['as' => 'admin.veeam_backups.create.index', 'uses' => 'Admin\veeamBackupController@create']);
        Route::get('admin/maquina_backup/list', ['as' => 'admin.veeam_backups.list.index', 'uses' => 'Admin\veeamBackupController@index']);
        Route::post('admin/maquina_backup/store', ['as' => 'admin.veeam_backups.store', 'uses' => 'Admin\veeamBackupController@store']);
        Route::get('admin/maquina_backup/show/{id}', ['as' => 'admin.veeam_backups.show', 'uses' => 'Admin\veeamBackupController@show']);
        Route::get('admin/maquina_backup/delete/{id}', ['as' => 'admin.veeam_backups.delete', 'uses' => 'Admin\veeamBackupController@destroy']);
        Route::put('admin/maquina_backup/update/{id}', ['as' => 'admin.veeam_backups.update', 'uses' => 'Admin\veeamBackupController@update']);
        Route::get('admin/maquina_backup/edit/{id}', ['as' => 'admin.veeam_backups.edit.index', 'uses' => 'Admin\veeamBackupController@edit']);
        /**-------------------------------------------------------------End maquina fisica-----------------------------------------------------  */

        /**------------------------------------------physic_machines --------------------------------------------*/
        Route::get('admin/maquina_fisica/index', ['as' => 'admin.physical_machines.create.index', 'uses' => 'Admin\PhysicalMachineController@create']);
        Route::get('admin/maquina_fisica/list', ['as' => 'admin.physical_machines.list.index', 'uses' => 'Admin\PhysicalMachineController@index']);
        Route::post('admin/maquina_fisica/store', ['as' => 'admin.physical_machines.store', 'uses' => 'Admin\PhysicalMachineController@store']);
        Route::get('admin/maquina_fisica/edit/{id}', ['as' => 'admin.physical_machines.edit.index', 'uses' => 'Admin\PhysicalMachineController@edit']);
        Route::put('admin/maquina_fisica/update/{id}', ['as' => 'admin.physical_machines.update', 'uses' => 'Admin\PhysicalMachineController@update']);
        Route::get('admin/maquina_fisica/delete/{id}', ['as' => 'admin.physical_machines.delete', 'uses' => 'Admin\PhysicalMachineController@destroy']);
        Route::get('admin/maquina_fisica/show/{id}', ['as' => 'admin.physical_machines.show', 'uses' => 'Admin\PhysicalMachineController@show']);
        Route::get('admin/maquina_fisica/print/{id}', ['as' => 'admin.physical_machines.print', 'uses' => 'Admin\PhysicalMachineController@print']);
        /**---------------------------------------------------------------------------End physic_machines---------------------------------------------- */
    });
});


use App\Jobs\SendExpirationReminder;

Route::get('/enviar-lembrete-expiracao', function () {
    SendExpirationReminder::dispatch();
    return 'Lembretes de expiração enviados com sucesso!';
});
/* inclui as rotas de autenticação do ficheiro auth.php */
require __DIR__ . '/auth.php';
