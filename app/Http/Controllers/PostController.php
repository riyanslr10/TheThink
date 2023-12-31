<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(Request $request)
    {  
        $title = '';


        $posts = Post::latest()
            ->filter($request->only(['search', 'category', 'postauthor']))
            ->paginate(6)
            ->withQueryString();

        return view('posts', [
            "title" => "Search Books" . $title,
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

        // Menambahkan fungsi untuk home view
        public function home()
        {
            // Ambil 6 post terbaru untuk ditampilkan di halaman home
            $latestPosts = Post::latest()->take(3)->get();
    
            // Mengirim data ke view 'home'
            return view('home', [
                "title" => "Home Page",
                "latestPosts" => $latestPosts
            ]);
        }
}
