<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'slug', 'cover_image'];

    // questa funzione ci permette di gestire l'url da un solo punto
    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }
}
