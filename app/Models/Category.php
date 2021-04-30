<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // use HasFactory;

    public function posts(){ // El metodo se llama plural porque una category puede tener muchos posts

        return $this->hasMany('App\Models\Post');

    }

}
