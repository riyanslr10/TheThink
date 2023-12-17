@extends('layouts.main')

@section('container')

<div class="container ">


    <!-- home -->
    <div class="relative  bg-no-repeat bg-center bg-fixed   md:h-[900px] " style="background-image: url('/img/home2.png')">
        <h1 class=" pt-72 pl-32 text-5xl font-bold tracking-tight text-stone-700 dark:text-white">
            Welcome to Our Online Library! 
        </h1>
        <h1 class="  pl-32 text-4xl font-bold tracking-tight text-stone-600 dark:text-white">
            Explore Our Latest Collections
        </h1>
        <a href="/posts">
            <button type="button"
                class="ml-32 mt-5 text-stone-600 bg-orange-200 hover:bg-orange-300 focus:ring-4 focus:ring-orange-300 font-bold rounded-lg text-lg px-3 py-2.5 me-2 mb-2  focus:outline-none
                animate-bounce">
                Explore
            </button>
        </a>
        
    </div>
    

    {{-- image 1 --}}
    <div class="grid grid-cols-1 gap-4 ml-44 mt-15 md:grid-cols-1 lg:grid-cols-2 pt-20">
        <a href="/detail"
        class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700
         ">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg ml-10 "
            src="/img/educated.jpg" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal pb-44">
            <h5 class=" text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Educated A
                Memoir
            </h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Tara Westover
            </h5>
            
            <button type="button"
                class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300  rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                DETAIL
                </button>
            </div>
        </a>

        {{-- image 2 --}}
        <a href="#"
            class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg ml-10"
                src="/img/educated.jpg" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal pb-44">
                <h5 class=" text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Educated A
                    Memoir
                </h5>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Tara Westover
                </h5>
                
                <button type="button"
                    class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300  rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                    transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                    DETAIL
                </button>
            </div>
        </a>
        {{-- image 3 --}}
        <a href="#"
        class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg ml-10"
            src="/img/educated.jpg" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal pb-44">
            <h5 class=" text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Educated A
                Memoir
            </h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Tara Westover
            </h5>
            
            <button type="button"
                class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300  rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                DETAIL
                </button>
            </div>
        </a>
        {{-- image 4 --}}
        <a href="#"
        class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg ml-10"
            src="/img/educated.jpg" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal pb-44">
            <h5 class=" text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Educated A
                Memoir
            </h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Tara Westover
            </h5>
            
            <button type="button"
                class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300  rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                DETAIL
                </button>
            </div>
        </a>
        {{-- image 5 --}}
        <a href="#"
        class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg ml-10"
            src="/img/educated.jpg" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal pb-44">
            <h5 class=" text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Educated A
                Memoir
            </h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Tara Westover
            </h5>
            
            <button type="button"
                class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300  rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                DETAIL
                </button>
            </div>
        </a>
        {{-- image 6 --}}
        <a href="#"
        class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg ml-10"
            src="/img/educated.jpg" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal pb-44">
            <h5 class=" text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Educated A
                Memoir
            </h5>
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Tara Westover
            </h5>
            
            <button type="button"
                class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300  rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                DETAIL
                </button>
            </div>
        </a>
    </div>
    <div class="flex justify-center pt-7 pb-7 pl-24">
        <a href="/posts">
        <button type="button"
            class="text-stone-600 bg-orange-200 hover:bg-orange-300 focus:ring-4 focus:ring-orange-300 font-bold rounded-lg text-lg px-3 py-2.5 me-2 mb-2  focus:outline-none
            transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
            View All Product</button>
        </a>
        
    </div>

    <div class="relative  bg-no-repeat bg-center    md:h-[700px] " style="background-image: url('/img/home3.png')">
        <h1 class=" text-center  text-3xl font-bold tracking-tight text-stone-700 dark:text-white animate-pulse">
            Top 3 Trending Books
        </h1>

    </div>

</div>    

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>


@endsection