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

        if ($response->successful()) {
            $book = $response->json();

            // Ambil tautan ACSM dari data buku jika tersedia
            $acsmLink = $book['pdf']['acsTokenLink'] ?? null;

            // Jika tautan ACSM ditemukan, proses untuk mendapatkan tautan PDF yang sebenarnya
            if ($acsmLink) {
                $directPDFLink = $this->getDirectPDFLink($acsmLink);
            } else {
                $directPDFLink = null;
            }

            // Kembalikan tampilan dengan data buku, bookId, dan tautan PDF langsung (jika tersedia)
            return view('book-detail', compact('book', 'bookId', 'directPDFLink'));
        }

        // Jika respons dari API gagal, kembalikan respons error 404
        return abort(404);
    }

    public function getDirectPDFLink(Request $request)
{
    $acsmLink = $request->query('acsmLink');

    // Di sini, Anda perlu memproses tautan ACSM untuk mendapatkan tautan PDF sebenarnya.
    // Untuk contoh sederhana, saya akan mengembalikan tautan ACSM langsung.
    // Namun, dalam implementasi sebenarnya, Anda perlu mengakses server Adobe Content Server untuk mendapatkan tautan PDF yang sebenarnya.

    // Anda bisa melakukan implementasi sesuai dengan kebutuhan Anda di sini.
    return response()->json(['directPDFLink' => $acsmLink]);
}


}
