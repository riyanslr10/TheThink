<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Book;

class BookController extends Controller
{
    public function show($bookId)
    {
        $apiKey = 'AIzaSyBABpwxgQN1twS1bi6YM6AdWsSzzjCXKhc';
        $url = "https://www.googleapis.com/books/v1/volumes/{$bookId}?key={$apiKey}";

        $response = Http::get($url);

        if ($response->ok()) {
            $bookData = $response->json();
            
            return view('book', ['book' => $bookData]);
        } else {
            return back()->with('error', 'Failed to fetch book details. Please try again later.');
        }
    }
}
