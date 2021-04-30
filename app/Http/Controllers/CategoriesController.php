<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function index(){

        // Se extraen todos los registros de la tabla Categorias
        $categories = Category::all(); // 'SELECT * FROM 'categories'
        return view('welcome', ['categories' => $categories]);
    }
}
