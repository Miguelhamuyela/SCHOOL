<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CpanelInfosi extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'cpanel_infosis';
    public $guarded = ['id'];

    protected $dates = ['deleted_at'];
}
