@extends('layouts.main')
@section('container')
    {{-- Detail buku --}}
    <div class=" flex justify-center  mt-15  pb-14 pt-14">
        <a href="#"
            class="flex flex-col items-center  rounded-lg shadow md:flex-row  h-[32rem]  hover:bg-blue-200 dark:border-blue-800 dark:bg-blue-200 dark:hover:bg-blue-300 px-28 bg-opacity-70">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-96 md:w-72 md:rounded-none md:rounded-s-lg px-5 "
                src="/img/foto agung.jpeg" alt="">
            <div class="flex flex-col  leading-normal justify-center pl-10 pr-10 dark:text-blue-800 ">
                <h5 class="mb-2 text-2xl font-bold tracking-tight ">Birds gonna be happy</h5>
                <p class="mb-3 text-xl font-semibold">By Timbur Hood</p>
                <button type="button"
                    class="text-white text-center md:w-40 bg-blue-800 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 me-2 mb-2 dark:bg-blue-800 dark:hover:bg-blue-900 focus:outline-none dark:focus:ring-blue-800  ">
                    Download PDF
                </button>
                <p class="mb-3 text-xl md:w-72 font-medium">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex nihil eveniet delectus totam nulla temporibus sunt, aliquam distinctio nostrum mollitia iste ratione voluptates repellat vel et quibusdam. Magnam, quis accusamus.</p>
            </div>
        </a>
    </div>
    



<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>

@endsection