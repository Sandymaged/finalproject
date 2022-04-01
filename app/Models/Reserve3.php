<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserve3 extends Model
{
    protected $table = "reserves3";
    protected $fillable = ['tent', 'phone', 'location', 'credit', 'date', 'time', 'numrandom', 'result', 'nameuser', 'gender', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
}
