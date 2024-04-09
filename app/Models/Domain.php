<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domain extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "domains";
    protected $guarded = ['id'];

    protected $dates = ['deleted_at'];

    public function virtual_machines()
    {
        return $this->belongsTo(VirtualMachine::class, 'fk_virtual_machines_id');
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'fk_customers_id');
    }
}
