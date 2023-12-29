<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index(Request $request)
    {  
        $title = '';

        if($request->has('category')) {
            $category = Category::firstWhere('slug', $request->category);
            if($category) {
                $title = ' in ' . $category->name;
            }
        }

        if($request->has('postauthor')) {
            $postauthor = User::firstWhere('name', $request->postauthor);
            if($postauthor) {
                $title = ' by ' . $postauthor->name;
            }
        }

        $posts = Post::latest()
            ->filter($request->only(['search', 'category', 'postauthor']))
            ->paginate(6)
            ->withQueryString();

        return view('posts', [
            "title" => "All Posts" . $title,
            "posts" => $posts,
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
