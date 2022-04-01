<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = "places";
    protected $fillable = ['userr', 'gender', 'place1', 'dov1', 'tov1', 'place2', 'dov2', 'tov2', 'place3', 'dov3', 'tov3', 'place4', 'dov4', 'tov4', 'place5', 'dov5', 'tov5', 'created_at', 'updated_at'];
    protected $hidden = ['created_at', 'updated_at'];
}
