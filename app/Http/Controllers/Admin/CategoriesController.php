<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        // Extrae todas las categorias en la BD
        $categories = Category::all();
        return view('admin.categories.index', ['categories' => $categories]);

    }

    public function store(Request $request){

        // dd(\App\Models\Category::all() );
        // Category::create([
        //     'name' => $request->category
        // ]);

        $newCategory = new Category();

        $newCategory->name = $request->name;
        $newCategory->save();

        return redirect()->back();

        // dd($request->category);
        // dd($request->all());
       
    }


    public function update(Request $request, $categoryid){


        $category = Category::find($categoryid);

        $category->name = $request->name;
        $category->save();

        return redirect()->back();

    }


    public function delete(Request $request, $categoryid){


        $category = Category::find($categoryid);

        $category->delete();
        

        return redirect()->back();
        
    }
}
