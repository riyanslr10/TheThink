@extends('layouts.main')

@section('container')
<div class="container py-16">
    {{-- Detail buku --}}
    <h1 class="text-center text-5xl font-bold text-stone-600 pt-8 pb-6">Detail Book</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 justify-center mx-auto max-w-7xl">
        <a href="#" class="bg-orange-100 overflow-hidden mb-4 md:mb-0">
            <!-- Tampilkan gambar buku -->
            <img src="{{ $book['volumeInfo']['imageLinks']['thumbnail'] ?? 'https://via.placeholder.com/400x600' }}" alt="{{ $book['volumeInfo']['title'] ?? 'Book Image' }}" class="rounded-t-lg h-full w-full object-cover">
        </a>

        <div id="bookDetails" class="md:pl-8">
            <!-- Detail buku akan ditampilkan di sini oleh JavaScript -->
        </div>
    </div>
</div>

<!-- Skrip untuk menampilkan detail buku -->
<script>
    function showBookDetails(bookId) {
        const apiKey = 'AIzaSyBABpwxgQN1twS1bi6YM6AdWsSzzjCXKhc'; 
        const url = `https://www.googleapis.com/books/v1/volumes/${bookId}?key=${apiKey}`;

        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                const directPDFLink = '{{ $directPDFLink }}';  // Ambil tautan PDF yang sebenarnya dari controller jika tersedia
                const bookDetails = `
                    <h2 class="font-bold text-2xl">${data.volumeInfo.title}</h2>
                    <p class="font-semibold"><strong>Authors:</strong> ${data.volumeInfo.authors ? data.volumeInfo.authors.join(', ') : 'Unknown'}</p>
                    <p><strong>Publication Year:</strong> ${data.volumeInfo.publishedDate ? data.volumeInfo.publishedDate : 'Unknown'}</p>
                    <p><strong>Publisher:</strong> ${data.volumeInfo.publisher ? data.volumeInfo.publisher : 'Unknown'}</p>
                    <p><strong>Page Count:</strong> ${data.volumeInfo.pageCount ? data.volumeInfo.pageCount : 'Unknown'}</p>
                    <p><strong>Average Rating:</strong> ${data.volumeInfo.averageRating ? data.volumeInfo.averageRating : 'Not rated yet'}</p>
                    <p><strong>Description:</strong> ${data.volumeInfo.description ? data.volumeInfo.description : 'No description available'}</p>
                    <button type="button" class="text-white text-center md:w-40 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-amber-600 font-medium rounded-lg text-lg font-bold px-3 py-2.5 me-2 my-2 dark:bg-amber-600 dark:hover:bg-amber-700 focus:outline-none dark:focus:ring-amber-700 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300" onclick="downloadPDF('${directPDFLink}', '${data.volumeInfo.title}')">Download PDF</button>
                `;

                // Tempatkan data buku ke dalam elemen dengan ID 'bookDetails'
                const bookDetailsContainer = document.getElementById('bookDetails');
                bookDetailsContainer.innerHTML = bookDetails;
            })
            .catch(error => {
                console.error('There was a problem fetching the book details:', error);
            });
    }

    function showLoadingIndicator() {
    // Tambahkan logika untuk menampilkan indikator loading
    const loadingIndicator = document.getElementById('loadingIndicator');
    if (loadingIndicator) {
        loadingIndicator.style.display = 'block';
    }
}

function hideLoadingIndicator() {
    // Tambahkan logika untuk menyembunyikan indikator loading
    const loadingIndicator = document.getElementById('loadingIndicator');
    if (loadingIndicator) {
        loadingIndicator.style.display = 'none';
    }
}

function downloadPDF(pdfLink, bookTitle) {
    // Tampilkan indikator loading
    showLoadingIndicator();

    fetch(pdfLink)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.blob();
        })
        .then(blob => {
            if (blob.size === 0) {
                throw new Error('Received empty blob');
            }
            
            const blobURL = URL.createObjectURL(blob);
            const anchor = document.createElement('a');
            anchor.href = blobURL;
            anchor.download = `${bookTitle}.pdf`;
            
            // Trigger klik pada anchor untuk memulai unduhan
            document.body.appendChild(anchor);
            anchor.click();
            document.body.removeChild(anchor);

            // Sembunyikan indikator loading
            hideLoadingIndicator();
            
            // Berikan feedback ke pengguna bahwa unduhan berhasil
            alert('PDF berhasil diunduh!');
        })
        .catch(error => {
            console.error('Error fetching or downloading PDF:', error);
            
            // Sembunyikan indikator loading
            hideLoadingIndicator();

            // Berikan pesan error kepada pengguna
            alert('Gagal mengunduh PDF. Silakan coba lagi.');
        });
}

    // Panggil fungsi untuk menampilkan detail buku
    showBookDetails('{{ $bookId }}');
</script>

@endsection
