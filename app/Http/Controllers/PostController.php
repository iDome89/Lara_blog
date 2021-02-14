<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $categories = Category::all();
        $posts = Post::paginate(5);

        return view('post.index',['posts' => $posts,'categories'=>$categories]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'post_title' => 'required',
            'category' => 'required',
            'post_content' => 'required'
        ]);
        $request->user()->posts()->create([
            'post_title'=> $request->post_title,
            'category_id'=> $request->category,
            'post_content' => $request->post_content

        ]);
        return back();
    }
}

