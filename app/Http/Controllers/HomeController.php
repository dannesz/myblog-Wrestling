<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index(){

        $categories = Category::all();
        $posts = Post::orderBy('id', 'DESC')->paginate(3);
        $posts = Post::all();

        return view('posts', [

            'categories' => $categories,
            'posts' => $posts,

            ]);

    }

    public function postByCategory($category){

        // dd($category);

        $categories = Category::all();
        $category = Category::where('name', '=', $category)->first(); // Donde el nombre sea igual a la categoria, nos devuelva el primero solamente

        $categoryIdSelected = $category->id;

        $posts = Post::where('category_id', '=', $categoryIdSelected)->get(); // Con 'get()' nos devuelve todos los post de la categoria seleccionada

        return view('posts', [

            'categories' => $categories,
            'posts' => $posts,
            'categoryIdSelected' => $categoryIdSelected

            ]);

    }


    public function post($postId){

        // Obtener el Post
        $post = Post::find($postId);
        $latestPosts = Post::orderBy('id', 'DESC')->take(3)->get();

        return view('post', [

            'post' => $post,
            'latestPosts' => $latestPosts

            ]);

    }
}
