<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookController extends Controller
{
    public function showDetail($bookId)
    {
        $apiKey = 'AIzaSyBABpwxgQN1twS1bi6YM6AdWsSzzjCXKhc';
        $url = "https://www.googleapis.com/books/v1/volumes/{$bookId}?key={$apiKey}";

        $response = Http::get($url);

        // Cek apakah respons dari API berhasil (kode status 200-299)
        if ($response->successful()) {
            $book = $response->json();
            // Kembalikan tampilan dengan data buku dan bookId
            return view('book-detail', compact('book', 'bookId'));
        }

        // Jika respons dari API gagal, kembalikan respons error 404
        return abort(404);
    }
}
