@extends('layouts.main')

@section('container')
    <div class="container overflow-hidden">
        <!-- jumbotron -->
        <div class="relative bg-no-repeat bg-center md:h-[700px] bg-fixed" style="background-image: url('/img/home2.png')">
            <h1 class=" pt-72 pl-32 text-5xl font-bold tracking-tight text-stone-700 dark:text-stone-600"
                data-aos="fade-right" data-aos-duration="1000">
                Welcome to <span class="text-amber-700"> The Think</span> Library!
            </h1>
            <h1 class="  pl-32 text-4xl font-bold tracking-tight text-stone-600 dark:text-white" data-aos="fade-right"
                data-aos-duration="1000">
                Explore Our Latest Collections
            </h1>
            <a href="/posts">
                <button type="button"
                    class="ml-32 mt-5 text-stone-600 bg-orange-200 hover:bg-orange-300 focus:ring-4 focus:ring-orange-300 font-bold rounded-lg text-lg px-3 py-2.5 me-2 mb-2  focus:outline-none
                animate-bounce">
                    Explore
                </button>
            </a>


            <div id="indicators-carousel" class="relative bottom-[520px] left-[400px]  " data-carousel="static">
                <!-- Carousel wrapper -->
                <div class="relative  overflow-hidden rounded-lg md:h-[900px]  mx-[600px] ">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                        <img src="/img/tere (1).jpeg"
                            class="absolute block h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 border-8 border-amber-700 rounded-lg p-9 bg-orange-200 "
                            alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/img/tere (2).jpeg"
                            class="absolute block h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 border-8 border-amber-700 rounded-lg p-9 bg-orange-200"
                            alt="...">
                    </div>
                    <!-- Item 3 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/img/tere (3).jpeg"
                            class="absolute block h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 border-8 border-amber-700 rounded-lg p-9 bg-orange-200"
                            alt="...">
                    </div>
                    <!-- Item 4 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/img/tere (1).jpeg"
                            class="absolute block h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 border-8 border-amber-700 rounded-lg p-9 bg-orange-200"
                            alt="...">
                    </div>
                    <!-- Item 5 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="/img/tere (2).jpeg"
                            class="absolute block h-96 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 border-8 border-amber-700 rounded-lg p-9 bg-orange-200"
                            alt="...">
                    </div>
                </div>

                <!-- Slider controls -->
                <button type="button"
                    class=" absolute bottom-[430px] start-0 z-30 ml-[480px] flex items-center justify-center  px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-stone-600 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class= "w-8 h-8 text-stone-600 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute bottom-[430px] end-0 z-30 mr-[500px] flex items-center justify-center  px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-stone-600 dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                        <svg class= "w-8 h-8 text-stone-600 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
            </div>
        </div>
        {{-- New Release --}}
        <div>
            <h1 class="text-3xl font-bold py-10 text-center text-stone-600 bg-orange-200">New Release Books</h1>
            <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8 lg:gap-10 pb-10 bg-orange-200">
                {{-- 1 --}}
                <section
                    class="bg-white bg-opacity-30  flex justify-center items-center gap-x-16 text-stone-600 m-10 rounded-lg"data-aos="
                                    fade-right" data-aos-duration="1000">
                    <div class="w-[300px] h-[420px] bg-transparent cursor-pointer group perspective">
                        <div class="relative preserve-3d group-hover:my-rotate-y-180 w-full h-full duration-1000">
                            <div class="absolute backface-hidden border-2 w-full h-full">
                                <img src="/img/children.png" class="w-full h-full" />
                            </div>
                            <div
                                class="absolute my-rotate-y-180 backface-hidden w-full h-full bg-orange-200 overflow-hidden border-8 border-orange-400">
                                <div
                                    class="text-center flex flex-col items-center justify-center h-full text-stone-600 px-2 pb-24">
                                    <h1 class="text-3xl font-extrabold">Matahari</h1>
                                    <p class="my-2 font-medium">By Tere Liye</p>
                                    <p>
                                        "Matahari" (The Sun) is a novel by Indonesian author Tere Liye. The story revolves
                                        around the central character, Awan, who experiences a tragic incident that changes
                                        his
                                        life.
                                    </p>
                                    <button
                                        class="bg-orange-300 px-6 py-2 font-semibold text-white rounded-full absolute -bottom-20 delay-500 duration-1000 group-hover:bottom-20 scale-0 group-hover:scale-125">
                                        Download PDF
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- 2 --}}
                <section
                    class="bg-white bg-opacity-30  flex justify-center items-center gap-x-16 text-stone-600 m-10 rounded-lg"data-aos="fade-bottom"
                    data-aos-duration="1000" data-aos-delay="200">
                    <div class="w-[300px] h-[420px] bg-transparent cursor-pointer group perspective">
                        <div class="relative preserve-3d group-hover:my-rotate-y-180 w-full h-full duration-1000">
                            <div class="absolute backface-hidden border-2 w-full h-full">
                                <img src="/img/education.png" class="w-full h-full" />
                            </div>
                            <div
                                class="absolute my-rotate-y-180 backface-hidden w-full h-full bg-orange-200 overflow-hidden border-8 border-orange-400">
                                <div
                                    class="text-center flex flex-col items-center justify-center h-full text-stone-600 px-2 pb-24">
                                    <h1 class="text-3xl font-extrabold">Bumi</h1>
                                    <p class="my-2 font-medium">By Tere Liye</p>
                                    <p>
                                        Bumi" is a novel by the Indonesian author Tere Liye. The story follows the life of
                                        the main character, Alif, who embarks on a journey of self-discovery and personal
                                        growth.
                                    </p>
                                    <button
                                        class="bg-orange-300 px-6 py-2 font-semibold text-white rounded-full absolute -bottom-20 delay-500 duration-1000 group-hover:bottom-20 scale-0 group-hover:scale-125">
                                        Download PDF
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                {{-- 3 --}}
                <section
                    class="bg-white bg-opacity-30  flex justify-center items-center gap-x-16 text-stone-600 m-10 rounded-lg"data-aos="fade-left"
                    data-aos-duration="1000" data-aos-delay="300">
                    <div class="w-[300px] h-[420px] bg-transparent cursor-pointer group perspective">
                        <div class="relative preserve-3d group-hover:my-rotate-y-180 w-full h-full duration-1000">
                            <div class="absolute backface-hidden border-2 w-full h-full">
                                <img src="/img/novel.png" class="w-full h-full" />
                            </div>
                            <div
                                class="absolute my-rotate-y-180 backface-hidden w-full h-full bg-orange-200 overflow-hidden border-8 border-orange-400">
                                <div
                                    class="text-center flex flex-col items-center justify-center h-full text-stone-600 px-2 pb-24">
                                    <h1 class="text-3xl font-extrabold">Bulan</h1>
                                    <p class="my-2 font-medium">By Tere Liye</p>
                                    <p>
                                        The book "Bulan" by Tere Liye is the second installment in the novel series "Bumi."
                                        While the first novel, "Bumi," recounts the adventures within the Moon clan, "Bulan"
                                        narrates the exploits within the Sun clan.
                                    </p>
                                    <button
                                        class="bg-orange-300 px-6 py-2 font-semibold text-white rounded-full absolute -bottom-20 delay-500 duration-1000 group-hover:bottom-20 scale-0 group-hover:scale-125">
                                        Download PDF
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


        </div>



    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection
