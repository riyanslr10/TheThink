@extends('layouts.main')

@section('container')

    <div class=" flex min-h-full flex-col justify-center px-6 pt-20 pb-10 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm pb-3">
            <h2 class=" text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">REGISTER
            </h2>
        </div>
        <div class="bg-orange-200 pl-[220px] mx-96  pt-1 pb-5 rounded-lg shadow-lg">
            <form class="" action="#" method="POST">
                <div>
                    <label for="Name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="">
                        <input id="Name" name="Name" type="Name" autocomplete="Name" required
                            class="block w-60 h-10 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="Username"
                            class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                    </div>
                    <div class="">
                        <input id="Username" name="Username" type="Username" autocomplete="Username"
                            required
                            class="block w-60 h-10 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        Address</label>
                    <div class="">
                        <input id="email" name="email" type="email" autocomplete="email" required
                            class="block w-60 h-10 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="">
                        <input id="password" name="password" type="password" autocomplete="current-password" required
                            class="block w-60 h-10 rounded-md border-0  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>


                <div>
                    <button type="submit"
                        class="flex mt-2 justify-center rounded-md bg-orange-300 bg-opacity-80 hover:bg-orange-400 px-3 py-2 text-lg font-semibold leading-6 text-stone-600 shadow-lg  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-amber-600">Register</button>
                </div>
            </form>
        </div>
    </div>    
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
@endsection

