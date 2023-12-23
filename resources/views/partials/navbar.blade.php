<nav class=" shadow-lg relative z-40">
    <div class="bg-white fixed w-full flex flex-wrap items-center justify-between py-1 text-center shadow-xl">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse px-3">
            <img src="/img/logo baru.png" class="h-20" />
            <span class="flex text-2xl md:text-justify font-bold whitespace-nowrap text-amber-700">TheThink</span>
        </a>
        <div class="flex md:order-2 pl-24 pr-5">
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
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full mt-1 p-2 ps-10 text-sm text-gray-900 border border-gray-100 rounded-lg bg-gray-50 focus:ring-orange-400 focus:border-orange-400  dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-orange-400 dark:focus:border-orange-400"
                    placeholder="Search...">
            </div>
            <button data-collapse-toggle="navbar-search" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-900 rounded-lg bg-orange-200 md:hidden"
                aria-controls="navbar-search" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="flex space-x-3 md:order-2 md:space-x-0 rtl:space-x-reverse px-3 mx-3 rounded-lg " :class="{ 'block': isOpen, 'hidden': !isOpen }">
                <ul class="flex items-center space-x-4 font-bold ">
                    @auth
                    <li x-data="{ isOpen: false }" @click.away="isOpen = false" class="relative nav-item dropdown px-5">
                        
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
                    </li>
                    @else
                    <li class="nav-item text-white bg-stone-600 rounded-lg px-5 py-2  transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300" >
                        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right "></i> Login</a>
                    </li>
                    @endauth
                </ul>

            </div>

        </div>
        <div class="items-center justify-between w-full md:flex md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-amber-600 focus:border-amber-600 "
                    placeholder="Search...">
            </div>
            <ul
                class="flex flex-col p-4 md:p-0 mt-4  font-bold border border-gray-100 rounded-sm md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 text-left sm:pl-10">
                <li>
                    <a href="/"
                        class="block py-2 px-3 text-lg font-bold text-stone-600 rounded md:
                        transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 duration-300 bg-orange-200"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/categories"
                        class="block py-2 px-3 text-lg font-bold text-stone-600 rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 md:bg-orange-200">Category</a>
                </li>

                <li>
                    <a href="/info"
                        class="block py-2 px-3 text-lg font-bold text-stone-600  rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 md:bg-orange-200">Information</a>
                </li>
                <li>
                    <a href="/login"
                        class="md:hidden block py-2 px-3 text-lg font-bold text-stone-600  rounded-lg 
                        transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300">Sign
                        In</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
