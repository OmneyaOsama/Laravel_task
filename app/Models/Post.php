<?php

namespace App\Models;
use App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
