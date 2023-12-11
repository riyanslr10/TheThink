@extends('layouts.main')

@section('container')

<div class="container ">
    <div class="grid grid-cols-1  md:grid-cols-1 lg:grid-cols-2 pt-24 pb-[50px]">
            
        <div class="flex pl-24">
        
            <div class="flex flex-row space-x-10">
                {{-- category 1 --}}
                <div class="w-[300px] h-[350px] bg-orange-200 border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover" src="/img/Fantastic 4.jpeg" alt="Education"/>
                    
                    <div class="flex pt-5 mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-10 py-2 text-lg font-bold text-center text-stone-600 bg-orange-300 bg-opacity-80 hover:bg-orange-400 rounded-lg focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-lg">Education</a>
                    </div>
                </div>
            
                {{-- category 2 --}}
                <div class="w-[300px] h-[350px] bg-orange-200 border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover" src="/img/tere (1).jpeg" alt="Education"/>
                    
                    <div class="flex pt-5 mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-10 py-2 text-lg font-bold text-center text-stone-600 bg-orange-300 bg-opacity-80 hover:bg-orange-400 rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-lg">Novel</a>
                    </div>
                </div>
            
                {{-- category 3 --}}
                <div class="w-[300px] h-[350px] bg-orange-200 border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover" src="/img/tere (2).jpeg" alt="Education"/>
                    
                    <div class="flex pt-5 mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-10 py-2 text-lg font-bold text-center text-stone-600 bg-orange-300 bg-opacity-80 hover:bg-orange-400 rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-lg">Food & Drink</a>
                    </div>
                </div>
            
                {{-- category 4 --}}
                <div class="w-[300px] h-[350px] bg-orange-200 border border-orange-400 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover" src="/img/tere (3).jpeg" alt="Education"/>
                    
                    <div class="flex pt-5 mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-10 py-2 text-lg font-bold text-center text-stone-600 bg-orange-300 bg-opacity-80 hover:bg-orange-400 rounded-lg  focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 shadow-lg">Children</a>
                    </div>
                </div>


            </div>
            
        </div>
    </div>
</div>








@endsection