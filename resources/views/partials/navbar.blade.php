<nav class=" shadow-lg relative z-40 overflow-hidden">
    <div
        class="bg-white fixed md:fixed w-full flex flex-wrap items-center justify-between py-1 text-center shadow-xl mx-auto">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse px-3 ms-12 md:ms-14">
            <img src="/img/logo baru.png" class="h-20" />
            <span class="flex text-2xl sm:text-justify font-bold whitespace-nowrap text-amber-700">TheThink</span>
        </a>
        <div class="flex md:order-2 ">
            <button type="submit" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                aria-expanded="false"
                class=" text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5 me-1 hidden">
                <svg class=" w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
                <span class="sr-only">Search</span>
            </button>

            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-900 rounded-lg bg-orange-200 lg:hidden hover:translate-x-1"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>



        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 " id="navbar-search">

            <ul
                class="md:hidden lg:flex flex-col p-4 sm:p-0 mt-4  font-bold border border-gray-100 rounded-sm sm:space-x-8 rtl:space-x-reverse sm:flex-row sm:mt-0 sm:border-0  sm:pl-10 text-center">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-lg font-bold text-stone-600 rounded sm:
                        transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 "
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/categories"
                        class="block py-2 px-3 text-lg font-bold text-stone-600 rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">Category</a>
                </li>

                <li>
                    <a href="/info"
                        class="block py-2 px-3 text-lg font-bold text-stone-600  rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 ">Information</a>
                </li>
                <li>
                    <a href="/login"
                        class="sm:hidden  block py-2 px-3 text-lg font-bold text-stone-600  rounded-lg transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">
                        Login
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse px-3 mx-3 rounded-lg "
            :class="{ 'block': isOpen, 'hidden': !isOpen }">
            <ul class="flex items-center space-x-4 font-bold ">
                @auth
                    {{-- <li x-data="{ isOpen: false }" @click.away="isOpen = false" class="relative nav-item dropdown px-5">
                    
                    <a @click="isOpen = !isOpen" class="nav-link dropdown-toggle cursor-pointer" role="button" aria-haspopup="true" :aria-expanded="isOpen ? 'true' : 'false'">
                        Welcome, {{ auth()->user()->name }} <svg class="ml-10 w-6 h-6  text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 8">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 5.326 5.7a.909.909 0 0 0 1.348 0L13 1"/>
                          </svg>
                    </a>
                    
                    <ul x-show="isOpen" @click.away="isOpen = false" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg">
                        <li><a class="block px-4 py-2 text-sm text-gray-700" href="/dashboard"> Dashboard</a></li>
                        <li class="border-t border-gray-200"></li>
                        <li>
                            <form action="/logout" method="post" class="block px-4  text-sm text-gray-700">
                                @csrf
                                <button type="submit" class="block px-14 py-2 text-sm text-gray-700 ">
                                    <span data-feather="log-out"></span> Logout
                                </button>
                            </form>
                        </li>
                    </ul>
                </li> --}}


                    <div class="flex items-center mr-10">
                        <div class="flex items-center ms-3">
                            <div>
                                <button type="button"
                                    class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                    aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full" src="/img/user.png" alt="user photo">
                                </button>
                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                                id="dropdown-user">
                                <div class="px-4 py-3" role="none">
                                    <p class="text-sm text-gray-900 dark:text-white" role="none">
                                        {{ auth()->user()->name }}
                                    </p>
                                    <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                        {{ auth()->user()->email }}
                                    </p>
                                </div>
                                <ul class="py-1" role="none">
                                    <li>
                                        <a href="/dashboard"
                                            class="block px-20 py-2 text-sm text-gray-700 hover:bg-orange-200 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                            role="menuitem">Dashboard</a>
                                    </li>
                                    <li>
                                        <form action="/logout" method="post">
                                            @csrf

                                            <button type="submit"
                                                class="block px-20 py-2 text-sm text-gray-700 hover:bg-orange-200 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">
                                                Logout
                                            </button>
                                        </form>
                                    </li>
                                @else
                                @endauth
                            </ul>

                        </div>
                    </div>
</nav>
