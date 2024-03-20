<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class HomeController extends Controller
{
    public function show(){
        $posts = Post::get();
        //$posts = DB::table('posts')->get();
        //return view('welcome', ['posts' => $posts]);
        //return view('welcome')->with('posts', $posts);
        return view('welcome')->with('posts', $posts);//->with('foo','bar');
    }
}
