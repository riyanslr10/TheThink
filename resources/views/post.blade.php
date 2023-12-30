@extends('layouts.main')

@section('container')
    <div class="container py-10">
        {{-- Detail buku --}}
        <h1 class=" text-center text-5xl font-bold  text-stone-600 lg:pt-16 pb-6 ">Detail Book</h1>

        <div class=" grid grid-cols-2 gap-4 justify-center mt-2 lg:me-56 lg:ms-56     overflow-hidden ">
            <a href="#" class="   overflow-hidden text-stone-600  ">
                @if ($post->image)
                    <img class="  rounded-t-lg h-full md:h-full  " src="{{ asset('storage/' . $post->image) }}"
                        alt="{{ $post->category->name }}">
                @else
                    <img src="https://source.unsplash.com/300x500?{{ $post->category->name }}"
                        alt="{{ $post->category->name }}" class=" lg:ms-44  border-8 border-orange-200">
                @endif
                <div class="leading-normal justify-center text-stone-600 dark:text-stone-600 ">
                    <h1 class=" text-2xl font-extrabold tracking-tight"> Title : {{ $post->title }}</h1>
                    <p class=" text-xl font-semibold">
                        <strong class="bg-white"> Category:</strong><a href="/posts?category={{ $post->category->slug }}"
                            class=""> {{ $post->category->name }}</a>
                    </p>
                    <p class=" text-xl font-semibold"><strong>Author:</strong> {{ $post->author }}</p>
                    <p class=" text-xl font-semibold"><strong>Publisher:</strong> {{ $post->publisher }}</p>
                    <p class=" text-xl font-semibold"><strong>Publication Year:</strong> {{ $post->publication_year }}</p>
                    <p class=" text-xl font-semibold"><strong>Page Count:</strong> {{ $post->page_count }}</p>

                    <!-- Tombol untuk mengunduh PDF -->
                    <button type="button"
                        class="text-stone-600 text-center md:w-48 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-amber-600font-medium rounded-lg text-lg font-bold px-3 py-2.5 me-2 my-2 dark:bg-amber-600 dark:hover:bg-amber-700 focus:outline-none dark:focus:ring-amber-700 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 "
                        onclick="generatePDF()">
                        <svg xmlns="http://www.w3.org/2000/svg"class="inline-block" width="24" height="24"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="m12 16l-5-5l1.4-1.45l2.6 2.6V4h2v8.15l2.6-2.6L17 11zm-6 4q-.825 0-1.412-.587T4 18v-3h2v3h12v-3h2v3q0 .825-.587 1.413T18 20z" />
                        </svg>Download PDF</button>

                    <article class=" fs-5 "> <span class="text-lg font-bold">synopsis :</span>
                        {!! $post->sinopsis !!}
                    </article>
                </div>
            </a>
            
            <div id="bookDetails">
                <!-- Detail buku akan ditampilkan di sini -->
            </div>
            

        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <!-- Skrip jspdf -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        function generatePDF() {
            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF({
                orientation: 'portrait',
                unit: 'mm',
                format: 'a4',
                marginLeft: 20,
                marginRight: 20,
                marginTop: 20,
                marginBottom: 20
            });

            let yPos = 20; // Awal margin atas
            const lineSpacing = 10; // Spasi antar baris

            // Mengatur font dan ukuran
            doc.setFont('Times New Roman', 'normal');
            doc.setFontSize(12);

        // Memasukkan data post ke PDF dengan format novel
        doc.text(' {{ $post->title }}', 10, yPos);
        yPos += lineSpacing * 2; // Spasi tambahan setelah judul

            doc.text('Post Author: {{ $post->postauthor }}', 10, yPos);
            yPos += lineSpacing;

            doc.text('Publisher: {{ $post->publisher }}', 10, yPos);
            yPos += lineSpacing;

            doc.text('Publication Year: {{ $post->publication_year }}', 10, yPos);
            yPos += lineSpacing;

            doc.text('Page Count: {{ $post->page_count }}', 10, yPos);
            yPos += lineSpacing * 2; // Spasi tambahan setelah informasi dasar

            // Memasukkan sinopsis atau body dengan format paragraf
            let sinopsis = '{{ $post->sinopsis }}'; // Misalnya, Anda dapat menggunakan post->body jika diperlukan
            let lines = doc.splitTextToSize(sinopsis, 180); // Membagi teks menjadi beberapa baris dengan lebar 180mm

            lines.forEach(line => {
                doc.text(line, 10, yPos);
                yPos += lineSpacing; // Menambahkan spasi antar baris
                if (yPos > 260) { // Jika mendekati batas bawah halaman, tambahkan halaman baru
                    doc.addPage();
                    yPos = 20; // Reset yPos
                }
            });

            // Memasukkan body dengan format paragraf
            let bodyContent =
                '{!! str_replace(['<p>', '</p>'], '', htmlspecialchars_decode($post->body)) !!}'; // Menghilangkan tag <p> dan </p>, serta mengkonversi karakter khusus
            let linesBody = doc.splitTextToSize(bodyContent, 180);
            linesBody.forEach(line => {
                doc.text(line, 10, yPos);
                yPos += lineSpacing;
                if (yPos > 260) {
                    doc.addPage();
                    yPos = 20;
                }
            });

        // Mengunduh PDF
        doc.save('{{ $post->title }}.pdf');
    }


    // API Google

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

}

</script>
@endsection
