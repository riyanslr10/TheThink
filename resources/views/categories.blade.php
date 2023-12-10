@extends('layouts.main')

@section('container')

<div class="container mb-10 mt-10">
    <div class="grid grid-cols-1 ml-10 mt-15 md:grid-cols-1 lg:grid-cols-2 pt-20 pb-10">
            
        <div class="flex bg-transparent">
        
            <div class="flex flex-row space-x-4">
                {{-- category 1 --}}
                <div class="w-[300px] h-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover" src="/img/Fantastic 4.jpeg" alt="Education"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Education</h5>
                    <div class="flex mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                    </div>
                </div>
            
                {{-- category 2 --}}
                <div class="w-[300px] h-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover" src="/img/tere (1).jpeg" alt="Education"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Education</h5>
                    <div class="flex mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                    </div>
                </div>
            
                {{-- category 3 --}}
                <div class="w-[300px] h-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover" src="/img/tere (2).jpeg" alt="Education"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Education</h5>
                    <div class="flex mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                    </div>
                </div>
            
                {{-- category 4 --}}
                <div class="w-[300px] h-[350px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 flex flex-col items-center pb-10">
                    <img class="w-full h-[200px] mb-3 rounded-t-lg shadow-lg object-cover" src="/img/tere (3).jpeg" alt="Education"/>
                    <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Education</h5>
                    <div class="flex mt-4 md:mt-6">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add friend</a>
                    </div>
                </div>


            </div>
            
        </div>
    </div>
</div>








@endsection