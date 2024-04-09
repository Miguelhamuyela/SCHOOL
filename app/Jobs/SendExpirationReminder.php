<?php

namespace App\Jobs;

use App\Mail\ExpirationReminder;
use App\Models\VirtualMachine;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendExpirationReminder implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle()
    {
        $expirationDate = now()->addDays(10)->toDateString();

     $client = VirtualMachine::with('customers')->whereDate('endContract', $expirationDate)->get();

        foreach ($client as $item) {

            Mail::to($item['customers']->email)->send(new ExpirationReminder($item['customers']->name));
        }
    }

}
