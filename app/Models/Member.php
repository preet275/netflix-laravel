<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
       // Fields that can be filled during registration
    protected $fillable = [
        'name',
        'email',
        'password',
        'status',
    ];
}
