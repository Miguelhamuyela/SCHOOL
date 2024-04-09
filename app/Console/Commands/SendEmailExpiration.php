<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\SendExpirationReminder;
class SendEmailExpiration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emailExpiration:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'comando para enviar email para clientes';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        SendExpirationReminder::dispatch();
        return 'Lembretes de expiração enviados com sucesso!';
    }
}
