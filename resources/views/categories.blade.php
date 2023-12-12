@extends('layouts.main')

@section('container')

<div class="container ">
    <h1 class="flex justify-center  text-3xl font-bold pt-24 pb-7 bg-orange-300 text-stone-600 mx-60 rounded-lg shadow-lg">Select the category you are interested in</h1>
    <div class="grid grid-cols-1  md:grid-cols-1 lg:grid-cols-2 pt-8 pb-[50px]">
            
        <div class="flex pl-24">
            
        
            <div class="flex flex-row space-x-10">
                {{-- category 1 --}}
                <div class="w-[300px] h-[350px] bg-orange-200 border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10 overflow-hidden">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover hover:scale-125" src="/img/Fantastic 4.jpeg" alt="Education"/>
                    
                    <div class="flex pt-5 mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-10 py-2 text-lg font-bold text-center text-stone-600 bg-orange-300 bg-opacity-80 hover:bg-orange-400 rounded-lg focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-300 dark:hover:bg-orange-400 dark:focus:ring-orange-400 shadow-lg
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                        Education</a>
                    </div>
                </div>
            
                {{-- category 2 --}}
                <div class="w-[300px] h-[350px] bg-orange-200 border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10 overflow-hidden">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover hover:scale-125" src="/img/tere (1).jpeg" alt="Education"/>
                    
                    <div class="flex pt-5 mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-10 py-2 text-lg font-bold text-center text-stone-600 bg-orange-300 bg-opacity-80 hover:bg-orange-400 rounded-lg  focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-300 dark:hover:bg-orange-400 dark:focus:ring-orange-400 shadow-lg
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                        Novel</a>
                    </div>
                </div>
            
                {{-- category 3 --}}
                <div class="w-[300px] h-[350px] bg-orange-200 border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10 overflow-hidden">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover hover:scale-125" src="/img/tere (2).jpeg" alt="Education"/>
                    
                    <div class="flex pt-5 mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-10 py-2 text-lg font-bold text-center text-stone-600 bg-orange-300 bg-opacity-80 hover:bg-orange-400 rounded-lg  focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-300 dark:hover:bg-orange-400 dark:focus:ring-orange-400 shadow-lg
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                        Food & Drink</a>
                    </div>
                </div>
            
                {{-- category 4 --}}
                <div class="w-[300px] h-[350px] bg-orange-200 border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10 overflow-hidden">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover hover:scale-125" src="/img/tere (3).jpeg" alt="Education"/>
                    
                    <div class="flex pt-5 mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-10 py-2 text-lg font-bold text-center text-stone-600 bg-orange-300 bg-opacity-80 hover:bg-orange-400 rounded-lg  focus:ring-4 focus:outline-none focus:ring-orange-300 dark:bg-orange-300 dark:hover:bg-orange-400 dark:focus:ring-orange-400 shadow-lg
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                        Children</a>
                    </div>
                </div>


            </div>
            
        </div>
    </div>
</div>








@endsection