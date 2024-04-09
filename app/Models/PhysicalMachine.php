<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhysicalMachine extends Model
{

    use HasFactory;
    use SoftDeletes;
    public $table = "physical_machines";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];


    public function customers(){
        return $this->belongsTo(Customer::class, 'fk_customers_id');
    }

    public function hacks(){
        return $this->belongsTo(Hack::class, 'fk_hacks_id');
    }


}



