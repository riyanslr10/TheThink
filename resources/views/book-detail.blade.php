@extends('layouts.main')

@section('container')
    
    <div class="container py-16">
        {{-- Detail buku --}}
        <h1 class="text-center text-5xl font-bold text-stone-600 pt-8 pb-6">Detail Book</h1>
    
        <div class="grid grid-cols-2 gap-4 justify-center mx-[300px] border-4 border-orange-200 rounded-lg shadow overflow-hidden"> 
            <a href="#" class="bg-orange-100 overflow-hidden">
                <!-- Tampilkan gambar buku -->
                <img src="{{ $book['volumeInfo']['imageLinks']['thumbnail'] ?? 'https://via.placeholder.com/400x600' }}" alt="{{ $book['volumeInfo']['title'] ?? 'Book Image' }}" class="rounded-t-lg h-full md:h-full">
                <div class="leading-normal justify-center dark:text-stone-600">
                    <!-- Tampilkan informasi buku -->
                    <h1 class="text-2xl font-extrabold tracking-tight">{{ $book['volumeInfo']['title'] ?? 'Book Title' }}</h1>
                    <p class="text-xl font-semibold"><strong>Category:</strong> <a href="/posts?category={{ $book['volumeInfo']['categories'][0] ?? '' }}" class="text-orange-500">{{ $book['volumeInfo']['categories'][0] ?? 'Category Name' }}</a></p>
                    <p class="text-xl font-semibold"><strong>Author:</strong> {{ $book['volumeInfo']['authors'][0] ?? 'Unknown Author' }}</p>
                    <p class="text-xl font-semibold"><strong>Publisher:</strong> {{ $book['volumeInfo']['publisher'] ?? 'Unknown Publisher' }}</p>
                    <p class="text-xl font-semibold"><strong>Publication Year:</strong> {{ $book['volumeInfo']['publishedDate'] ?? 'Unknown Year' }}</p>
                    <p class="text-xl font-semibold"><strong>Page Count:</strong> {{ $book['volumeInfo']['pageCount'] ?? 'Unknown Page Count' }}</p>

                    <!-- Tombol untuk mengunduh PDF -->
                    <button type="button" class="text-white text-center md:w-40 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-orange-500 rounded-lg text-lg font-bold px-3 py-2.5 me-2 my-2 dark:bg-amber-600 dark:hover:bg-amber-700 focus:outline-none dark:focus:ring-amber-700 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" onclick="generatePDF()">Unduh PDF</button>

                    <!-- Tampilkan sinopsis buku -->
                    <article class="fs-5">
                        <span class="text-lg font-bold">Synopsis:</span>
                        {{ $book['volumeInfo']['description'] ?? 'No description available' }}
                    </article>
                </div>
            </a>
            
            <div id="bookDetails">
                <!-- Detail buku akan ditampilkan di sini -->
            </div>
        </div>
    </div>

    <!-- Skrip jspdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        function generatePDF() {
            // Fungsi untuk mengunduh PDF (sesuai dengan kebutuhan Anda)
            // ...
        }

        // Fungsi untuk menampilkan detail buku dari Google Books API
        function showBookDetails(bookId) {
            const apiKey = 'AIzaSyBABpwxgQN1twS1bi6YM6AdWsSzzjCXKhc'; // Ganti dengan API Key Google Books Anda
            const url = `https://www.googleapis.com/books/v1/volumes/${bookId}?key=${apiKey}`;

            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    const bookDetails = `
                        <h2>${data.volumeInfo.title}</h2>
                        <p><strong>Authors:</strong> ${data.volumeInfo.authors ? data.volumeInfo.authors.join(', ') : 'Unknown'}</p>
                        <p><strong>Description:</strong> ${data.volumeInfo.description ? data.volumeInfo.description : 'No description available'}</p>
                        <!-- Tambahkan info lain yang ingin ditampilkan -->
                    `;

                    // Tempatkan data buku ke dalam elemen dengan ID tertentu di HTML
                    const bookDetailsContainer = document.getElementById('bookDetails');
                    bookDetailsContainer.innerHTML = bookDetails;
                })
                .catch(error => {
                    console.error('There was a problem fetching the book details:', error);
                });
        }

        // Panggil fungsi untuk menampilkan detail buku sesuai dengan ID buku yang diperoleh dari konten sebelumnya
        showBookDetails({{ $bookId }}); // Pastikan variabel $bookId telah didefinisikan sebelumnya
    </script>
@endsection
