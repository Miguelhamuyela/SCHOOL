<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Requeste extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'requestes';
    public $guarded = ['id'];

    protected $dates = ['deleted_at'];
}
