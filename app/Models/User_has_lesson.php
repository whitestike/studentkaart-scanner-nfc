<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_has_lesson extends Model
{
    use HasFactory;

    public function user(){
        $this->hasMany('App/Model/User');
    }
}
