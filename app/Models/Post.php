<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'author',
        'body',
        'cover',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
