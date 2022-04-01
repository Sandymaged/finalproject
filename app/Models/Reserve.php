<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $table = "reserves";
    protected $fillable = ['tent', 'phone', 'location', 'credit', 'date', 'time', 'numrandom', 'result', 'nameuser', 'gender', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
}
