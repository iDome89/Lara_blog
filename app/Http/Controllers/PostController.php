<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::orderBy('created_at', 'desc')->paginate(5);

        return view('post.index', ['posts' => $posts, 'categories' => $categories]);
    }

    public function show(Post $post)
    {
        return view('post.show', ['post' => $post]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'post_title' => 'required',
            'category' => 'required',
            'post_content' => 'required'
        ]);
        $request->user()->posts()->create([
            'post_title' => $request->post_title,
            'category_id' => $request->category,
            'post_content' => $request->post_content

        ]);
        return back();
    }

    public function edit(Post $post)
    {    $this->authorize('delete', $post);
        $categories = Category::all();
        return view('post.EDIT', ['post' => $post, 'categories' => $categories]);
    }

    public function update(Request $request, Post $post)
    {

        $post->update([
            'post_title' => $request->post_title,
            'category_id' => $request->category,
            'post_content' => $request->post_content

        ]);

        return redirect('post');

    }




    public function destroy(Post $post){
        $this->authorize('delete', $post);
        $post->delete();

        return back();
    }


}

