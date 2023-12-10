@extends('layouts.main')

@section('container')

<div class="container">
    <div class=" flex justify-center py-20 px-20">        
        <a href="#" class="flex flex-col py-10 px-10 items-center bg-blue-200 border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl ">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="/img/Fantastic 4.jpeg" alt="">
            {{-- <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Fantastic Four</h5>
                <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Project Manager</p>
                <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Moch Riyan Putra Suryadi - 213040017</p>
                <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Front-End</p>
                <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Agung purnama rahmat - 213040086</p>
                <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">juan aditya wikarma - 213040053</p>
                <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Back-End</p>
                <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">Saiful Hilal - 213040128</p>
            </div> --}}

            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
<ol class="border-0 px-4 border-neutral-300 dark:border-neutral-500">
    <!--First item-->
    <li>
      <div class="mb-6 ml-4 mt-2">
        <h4 class="mb-1.5 text-xl font-semibold">Project Manager</h4>
            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                Moch Riyan Putra Suryadi - 213040017
            </p>
      </div>
    </li>

    <!--Second item-->
    <li>
      <div class="mb-6 ml-4 mt-2">
        <h4 class="mb-1.5 text-xl font-semibold">Front-End</h4>
        <p class="mb-3 text-neutral-500 dark:text-neutral-300">
            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                Agung purnama rahmat - 213040086
            </p>
            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">&</p>
            <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
                juan aditya wikarma - 213040053
            </p> 
        </p>
      </div>
    </li>
  
    <!--Third item-->
    <li>
      <div class="ml-4 mt-2 pb-5">
        <h4 class="mb-1.5 text-xl font-semibold">Back-End</h4>
        <p class="mb-1 font-normal text-gray-700 dark:text-gray-400">
            Saiful Hilal - 213040128
        </p>
      </div>
    </li>
  </ol>
        </a>
    </div>
</div>
@endsection


