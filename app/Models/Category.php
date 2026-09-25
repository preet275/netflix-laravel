<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Fields that can be inserted or updated
    protected $fillable = [
        'name',
        'status',
    ];
}
