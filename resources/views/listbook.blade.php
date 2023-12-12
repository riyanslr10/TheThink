@extends('layouts.main')

@section('container')

<div class="container">

    <div>
        
        {{-- NAVBAR --}}
        <h1 class="flex pl-44 text-4xl font-bold pt-24 bg-orange-300 text-stone-600">LIST BOOKS</h1>
        <div class="flex   bg-orange-300 pb-2 pl-44 rounded-b-xl shadow-lg">
            <a href="#"
                class="text-stone-600 bg-orange-100 hover:bg-orange-200 focus:ring-4 focus:ring-orange-200 font-bold rounded-lg text-lg px-3 py-2.5 me-2 mb-2 m-3
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                Novel</a>
            <a href="#"
                class="text-stone-600 bg-orange-100 hover:bg-orange-200 focus:ring-4 focus:ring-orange-200 font-bold rounded-lg text-lg px-3 py-2.5 me-2 mb-2 m-3
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                Education</a>
            <a href="#"
                class="text-stone-600 bg-orange-100 hover:bg-orange-200 focus:ring-4 focus:ring-orange-200 font-bold rounded-lg text-lg px-3 py-2.5 me-2 mb-2 m-3
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                Children</a>

        </div>


        {{-- CARD BOOK --}}
        {{-- image 1 --}}
        <div class="grid grid-cols-1 gap-7 ml-44 mt-15 md:grid-cols-1 lg:grid-cols-2 pt-2">
            <a href="/detail"
                class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 ">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg p-4 "
                    src="/img/brave new world.jpg" alt="">
                <div class="flex flex-col p-4 leading-normal pb-44">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Brave New
                        World
                    </h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Aldous Huxley
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
                class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 ">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg p-4"
                    src="/img/educated.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal pb-44">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Educated A
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
                class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 ">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg p-4"
                    src="/img/mother.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal pb-44">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Mother Stories
                    </h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Chris Power
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
                class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 ">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg p-4"
                    src="/img/the handmaid.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal pb-44">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">The Handmaid's
                        Tale
                    </h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Margaret
                        Atwood
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
                class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 ">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg p-4"
                    src="/img/the weight.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal pb-44">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">The Weight of
                        Things
                    </h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Marianne Fritz
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
                class="flex flex-col items-center bg-orange-100 border-4 border-orange-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-orange-200 hover:border-orange-300 ">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg p-4"
                    src="/img/attack on titan.jpg" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal pb-44">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Attack On
                        Titan
                    </h5>
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-stone-600 dark:text-white">Hajime Isayama
                    </h5>

                    <button type="button"
                class="text-stone-600 bg-orange-300 hover:bg-orange-400 focus:ring-4 focus:ring-blue-300  rounded-lg text-lg font-extrabold px-3 py-2.5 me-2 mb-2 mr-20
                transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">
                DETAIL
                </button>
                </div>
            </a>
        </div>


        <div class="flex justify-center pt-7 pb-7">
            <nav aria-label="Page navigation example">
                <ul class="inline-flex -space-x-px text-lg font-bold h-10 text-stone-600">
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 ms-0 leading-tight  rounded-s-lg ">Previous</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight border-2 border-orange-300 bg-orange-200 hover:bg-orange-300 hover:text-stone-700 ">1</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight border-2 border-orange-300 bg-orange-200 hover:bg-orange-300 hover:text-stone-700">2</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight border-2 border-orange-300 bg-orange-200 hover:bg-orange-300 hover:text-stone-700">3</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight border-2 border-orange-300 bg-orange-200 hover:bg-orange-300 hover:text-stone-700">4</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight border-2 border-orange-300 bg-orange-200 hover:bg-orange-300 hover:text-stone-700">5</a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center justify-center px-4 h-10 leading-tight rounded-e-lg ">Next</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>


@endsection
