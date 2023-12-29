@extends('layouts.main')

@section('container')

<div class="container">        
    <h1 class="flex justify-center mb-10 pb-10 text-4xl font-bold pt-28 bg-orange-300 text-stone-600">
        {{ $title }}
    </h1>
    
    <div class="flex justify-center mb-3">
        <div class="md:w-1/2">
            {{-- Form Pencarian --}}
            <form action="/posts" method="GET" id="searchForm" class="flex justify-center mx-auto w-full xl:w-3/4 lg:w-11/12 my-10 rounded-s-xl p-2">
                {{-- Input Hidden untuk Kategori dan Penulis Posting --}}
                @if(request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if(request('postauthor'))
                    <input type="hidden" name="postauthor" value="{{ request('postauthor') }}">
                @endif
                
                {{-- Input untuk memasukkan teks pencarian --}}
                <input type="text" placeholder="Search" id="searchInput" class="w-full focus:outline-none" name="search" value="{{ request('search') }}">
            </form>
        </div>
    </div>
  
    {{-- Card Books API --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-7 pt-2" id="bookList">
        {{-- Card Books akan ditampilkan di sini --}}
    </div>
    
    {{-- Daftar Buku dari Google Books --}}
    <div id="searchResults" class="flex justify-center mt-4"></div>

</div>


     {{-- CARD BOOK --}}
     @if ($posts->count())
     <div class=" gap-7  md:grid-cols-3 lg:grid-cols-3 pt-2">
         

         {{-- image --}}
         <div class="container">
             <div class="grid grid-cols-3 gap-9 mx-10">
                 @foreach ($posts->skip(0) as $post)
                     <div class="card w-full h-full   md:w-full lg:w-full xl:w-full bg-orange-100 border-4 border-orange-200 rounded-lg shadow hover:bg-orange-200 hover:border-orange-300 mb-4 overflow-hidden" data-aos="fade-right"
                     data-aos-duration="1000">
                         @if ($post->image)
                             <img class="object-cover w-full rounded-t-lg h-48 md:h-64 lg:h-80 xl:h-96 "
                                  src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}">
                         @else
                             <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top "
                                  alt="{{ $post->category->name }}">
                         @endif
                         <div class=" justify-between p-4 pt-12 leading-normal">
                             <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">
                                 {{ $post->title }}
                             </h5>
                             <h5 class="mb-2 text-md font-bold tracking-tight text-stone-600 dark:text-white">
                                 By. <a href="/posts?author={{ $post->author }}" class="text-decoration-none">
                                     {{ $post->author }}
                                 </a> {{ $post->created_at->diffForHumans() }}
                             </h5>
                             
                             <a href="/post/{{  $post->slug }}">
                                 <button type="button"
                                         class="text-white bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-orange-500 rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                                         transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                                     DETAIL
                                 </button>
                             </a>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>        
         </a>
         
             @else
             <p class="text-center fs-4 py-16">No post found.</p>
             @endif 
             
             <div class="flex justify-center pt-10 pb-10 px-6">
                 {{ $posts->links() }}   
             </div>

             
         </div>

<script>
    document.getElementById('searchInput').addEventListener('input', function(event) {
        const searchQuery = event.target.value.trim();
        liveSearch(searchQuery);
    });

    function liveSearch(query) {
        const apiKey = 'AIzaSyBABpwxgQN1twS1bi6YM6AdWsSzzjCXKhc'; // Ganti dengan API Key Google Books Anda
        const url = `https://www.googleapis.com/books/v1/volumes?q=${query}&key=${apiKey}`;
        
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                displayBooks(data.items);
            })
            .catch(error => {
                console.error('There was a problem fetching the data:', error);
            });
    }

    function displayBooks(books) {
        const bookContainer = document.getElementById('bookList');
        bookContainer.innerHTML = '';

        books.forEach(book => {
            const bookCard = `
                <div class="card w-full bg-orange-100 border-4 border-orange-200 rounded-lg shadow hover:bg-orange-200 hover:border-orange-300 mb-4 overflow-hidden" data-aos="fade-right" data-aos-duration="1000">
                    <img class="object-cover w-full rounded-t-lg h-48 md:h-64 lg:h-80 xl:h-96" src="${book.volumeInfo.imageLinks ? book.volumeInfo.imageLinks.thumbnail : 'https://via.placeholder.com/150'}" alt="${book.volumeInfo.title}">
                    <div class="p-4 pt-12 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">${book.volumeInfo.title}</h5>
                        <h5 class="mb-2 text-md font-bold tracking-tight text-stone-600 dark:text-white">
                            Penulis: ${book.volumeInfo.authors ? book.volumeInfo.authors.join(', ') : 'Tidak ada informasi'}
                        </h5>
                        <p class="text-stone-600 dark:text-white">${book.volumeInfo.description ? book.volumeInfo.description : 'Tidak ada informasi'}</p>
                        <a href="/post/">
                        <button type="button"class="text-white bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-orange-500 rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300">
                            DETAIL
                        </button>
                        </a>
                    </div>
                </div>
            `;
            bookContainer.innerHTML += bookCard;
        });
    }
</script>

@endsection
