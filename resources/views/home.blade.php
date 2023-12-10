@extends('layouts.main')

@section('container')

<div class="container">
{{-- CAROUSEL --}}
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/wallpaper.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/educated.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/mother.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/the handmaid.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="/img/attack on titan.jpg"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                alt="...">
        </div>
    </div>
    

            {{-- image 1 --}}
            <div class="grid grid-cols-1 gap-4 ml-44 mt-15 md:grid-cols-1 lg:grid-cols-2 pt-20">
                <a href="/detail"
                    class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="/img/brave new world.jpg" alt="">
                    <div class="flex flex-col p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Brave New
                            World
                        </h5>
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Aldous Huxley
                        </h5>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The novel examines a futuristic
                            society,
                            called the World State, that revolves around science and efficiency. In this society,
                            emotions
                            and
                            individuality are conditioned out of children at a young age, and there are no lasting
                            relationships
                            because “every one belongs to every one else”</p>
                        <button type="button"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download
                            PDF</button>
                    </div>
                </a>
    {{-- image 1 --}}
    <div class="grid grid-cols-1 gap-4 ml-44 mt-15 md:grid-cols-1 lg:grid-cols-2 pt-20">
        <a href="#"
            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
           
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="/img/brave new world.jpg" alt="">
            <div class="flex flex-col p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Brave New
                    World
                </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Aldous Huxley
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The novel examines a futuristic
                    society,
                    called the World State, that revolves around science and efficiency. In this society,
                    emotions
                    and
                    individuality are conditioned out of children at a young age, and there are no lasting
                    relationships
                    because “every one belongs to every one else”</p>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download
                    PDF</button>
            </div>
        </a>

        {{-- image 2 --}}
        <a href="#"
            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="/img/educated.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Educated A
                    Memoir
                </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tara Westover
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Educated by Tara Westover is a
                    memoir
                    that
                    chronicles the author's journey from a homeschooling survivalist family in Idaho to a PhD at
                    Cambridge. It's a powerful story of self-discovery, challenging beliefs, and finding one's
                    own
                    truth.</p>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download
                    PDF</button>
            </div>
        </a>
        {{-- image 3 --}}
        <a href="#"
            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="/img/mother.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mother Stories
                </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Chris Power
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The story is about a young couple
                    living
                    in New York who wish to marry, but must wait until their means are sufficient. The
                    groom-to-be
                    luckily inherits a large sum, and intends to invest it wisely in order to live off the
                    income.
                </p>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download
                    PDF</button>
            </div>
        </a>
        {{-- image 4 --}}
        <a href="#"
            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="/img/the handmaid.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">The Handmaid's
                    Tale
                </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Margaret
                    Atwood
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The Handmaid's Tale is a
                    futuristic
                    dystopian novel by Canadian author Margaret Atwood published in 1985. It is set in a
                    near-future
                    New
                    England in a patriarchal, white supremacist, totalitarian theonomic state known as the
                    Republic
                    of
                    Gilead, which has overthrown the United States government.</p>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download
                    PDF</button>
            </div>
        </a>
        {{-- image 5 --}}
        <a href="#"
            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="/img/the weight.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">The Weight of
                    Things
                </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Marianne Fritz
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">The Weight of Things is an short
                    novel
                    about one woman's loneliness, futility, and compromised mental health, but she also
                    represents a
                    society struggling to reclaim itself after a catastrophe.</p>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download
                    PDF</button>
            </div>
        </a>
        {{-- image 6 --}}
        <a href="#"
            class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="/img/attack on titan.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Attack On
                    Titan
                </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Hajime Isayama
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Attack On Titan is about how a
                    boy's
                    life
                    changes when he loses his family to titans. The main protagonist is a 15-year-old named Eren
                    Yeager
                    who lives with his sister and parents until one day, his village is destroyed by giants
                    called
                    titans.
                </p>
                <button type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Download
                    PDF</button>
            </div>
        </a>
    </div>
    <div class="flex justify-center pt-7 pb-7">
        <button type="button"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">View
            All Product</button>
    </div>


</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>


@endsection