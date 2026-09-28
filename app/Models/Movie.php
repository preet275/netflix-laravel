<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Movie extends Model
{
    // Fields that can be inserted or updated
    protected $fillable = [
        'title',
        'slug',
        'description',
        'poster',
        'trailer',
        'release_year',
        'duration',
        'category_id',
        'status',
    ];

    // Movie belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
