<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VirtualMachine extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "virtual_machines";
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function physical_machines()
    {
        return $this->belongsTo(PhysicalMachine::class, 'fk_physical_machines_id');
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'fk_customers_id');
    }

    public function hacks()
    {
        return $this->belongsTo(Hack::class, 'fk_hacks_id');
    }
  




}
