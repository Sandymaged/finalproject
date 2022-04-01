<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";
    protected $fillable = [
        'ques1', 'ques2', 'ques3', 'ques4', 'ques5', 'ques6', 'ques7',
        'ques8', 'ques9', 'ques10', 'ques11', 'ques12', 'ques13',  'ques14', 'ques15', 'created_at', 'updated_at'
    ];
    protected $hidden = ['created_at', 'updated_at'];
}
