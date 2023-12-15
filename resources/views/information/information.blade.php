@extends('layouts.main')

@section('container')

<div class="container">
    <h1 class="flex justify-center text-5xl font-bold pt-16 text-stone-600">Fantastic 4</h1>
    <div class=" flex justify-center pt-3 pb-8 px-20">        
        <a href="#" class="flex flex-col py-10 px-10 items-center bg-orange-200 border border-orange-300 rounded-lg shadow md:flex-row ">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg border-8 border-orange-300" src="/img/Fantastic 4.jpeg" alt="">
           
            
            <ol class="border-0 px-4 border-neutral-300 dark:border-neutral-500">
            <!--First item-->
            <li>
            <div class="mb-6 ml-4 mt-2">
                <h4 class=" text-xl font-bold text-stone-600 dark:text-stone-60">Project Manager</h4>
                    <p class="mb-1 font-semibold text-stone-600 dark:text-stone-600">
                        Moch Riyan Putra Suryadi - 213040017
                    </p>
            </div>
            </li>

             <!--Second item-->
             <li>
                <div class="mb-6 ml-4 mt-2">
                    <h4 class=" text-xl font-bold text-stone-600 dark:text-stone-600">Front-end</h4>
                        <p class=" font-semibold text-stone-600 dark:text-stone-600">
                            Agung Purnama Rahmat - 213040084 
                        </p>
                        <p class="mb-1 font-semibold text-stone-600 dark:text-stone-600">
                            Juan Aditya Wikarma - 213040053
                        </p>
                </div>
                </li>

                 <!--third item-->
            <li>
                <div class="mb-6 ml-4 mt-2">
                    <h4 class=" text-xl font-bold text-stone-600 dark:text-stone-600">Back-end</h4>
                        <p class="mb-1 font-semibold text-stone-600 dark:text-stone-600">
                            Saiful Hilal - 213040128
                        </p>
                </div>
                </li>
           
        </ol>
                </a>
            </div>
        </div>
@endsection

