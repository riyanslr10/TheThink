@extends('layouts.main')

@section('container')

<div class="container pt-7">
    <h1 class="flex justify-center text-5xl font-bold pt-20 text-stone-600">Fantastic 4</h1>
    <div >
        <div class="grid grid-cols-1 bg-no-repeat bg-center bg-cover h-[600px] md:grid-cols-1 lg:grid-cols-4 pb-[50px] " ">
                {{-- 1 --}}
            <section
            class="bg-white bg-opacity-30  flex justify-center items-center gap-x-16 text-stone-600 m-10 rounded-lg"data-aos="fade-right"
            data-aos-duration="1000"
            >
                <div
                class="w-[300px] h-[420px] bg-transparent cursor-pointer group perspective"
                >
                    <div
                    class="relative preserve-3d group-hover:my-rotate-y-180 w-full h-full duration-1000"
                    >
                        <div class="absolute backface-hidden border-8 w-full h-full border-orange-300">
                            <img src="/img/riyan.jpg" class="w-full h-full" />
                        </div>
                        <div
                        class="absolute my-rotate-y-180 backface-hidden w-full h-full bg-orange-200 overflow-hidden border-8 border-orange-400"
                        >
                            <div
                            class="text-center flex flex-col items-center justify-center h-full text-stone-600 px-2 "
                            >
                                <h1 class="text-3xl font-extrabold">Moch Riyan Putra Suryadi</h1>
                                <p class="my-2 text-2xl font-medium">Project Manager</p>
                                <ul class="flex space-x-4 sm:mt-0">
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/riyanslr10/" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/in/mochriyanputrasuryadi/" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10 mt-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd"/>
                                                <path d="M3 5.012H0V15h3V5.012Z"/></svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- 2 --}}
            <section
            class="bg-white bg-opacity-30  flex justify-center items-center gap-x-16 text-stone-600 m-10 rounded-lg"data-aos="fade-bottom"
            data-aos-duration="1000" data-aos-delay="200"
            >
                <div
                class="w-[300px] h-[420px] bg-transparent cursor-pointer group perspective"
                >
                    <div
                    class="relative preserve-3d group-hover:my-rotate-y-180 w-full h-full duration-1000"
                    >
                        <div class="absolute backface-hidden border-8 w-full h-full border-orange-300">
                            <img src="/img/juan.jpg" class="w-full h-full" />
                        </div>
                        <div
                        class="absolute my-rotate-y-180 backface-hidden w-full h-full bg-orange-200 overflow-hidden border-8 border-orange-400"
                        >
                            <div
                            class="text-center flex flex-col items-center justify-center h-full text-stone-600 px-2 "
                            >
                                <h1 class="text-3xl font-extrabold">Juan Aditya Wikarma</h1>
                                <p class="my-2 text-2xl font-medium">Front-End Developer</p>
                                <ul class="flex space-x-4 sm:mt-0">
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10 mt-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd"/>
                                                <path d="M3 5.012H0V15h3V5.012Z"/></svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- 3 --}}
            <section
            class="bg-white bg-opacity-30  flex justify-center items-center gap-x-16 text-stone-600 m-10 rounded-lg"data-aos="fade-bottom"
            data-aos-duration="1000" data-aos-delay="300"
            >
                <div
                class="w-[300px] h-[420px] bg-transparent cursor-pointer group perspective"
                >
                    <div
                    class="relative preserve-3d group-hover:my-rotate-y-180 w-full h-full duration-1000"
                    >
                        <div class="absolute backface-hidden border-8 w-full h-full border-orange-300">
                            <img src="/img/agung.jpeg" class="w-full h-full" />
                        </div>
                        <div
                        class="absolute my-rotate-y-180 backface-hidden w-full h-full bg-orange-200 overflow-hidden border-8 border-orange-400"
                        >
                            <div
                            class="text-center flex flex-col items-center justify-center h-full text-stone-600 px-2 "
                            >
                                <h1 class="text-3xl font-extrabold">Agung Purnama Rahmat</h1>
                                <p class="my-2 text-2xl font-medium">Front-End Developer</p>
                                <ul class="flex space-x-4 sm:mt-0">
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10 mt-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd"/>
                                                <path d="M3 5.012H0V15h3V5.012Z"/></svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            {{-- 4 --}}
            <section
            class="bg-white bg-opacity-30  flex justify-center items-center gap-x-16 text-stone-600 m-10 rounded-lg"data-aos="fade-left"
            data-aos-duration="1000" data-aos-delay="400"
            >
                <div
                class="w-[300px] h-[420px] bg-transparent cursor-pointer group perspective"
                >
                    <div
                    class="relative preserve-3d group-hover:my-rotate-y-180 w-full h-full duration-1000"
                    >
                        <div class="absolute backface-hidden border-8 w-full h-full border-orange-300">
                            <img src="/img/l.jpg" class="w-full h-full" />
                        </div>
                        <div
                        class="absolute my-rotate-y-180 backface-hidden w-full h-full bg-orange-200 overflow-hidden border-8 border-orange-400"
                        >
                            <div
                            class="text-center flex flex-col items-center justify-center h-full text-stone-600 px-2 "
                            >
                                <h1 class="text-3xl font-extrabold">Saiful Hilal</h1>
                                <p class="my-2 text-2xl font-medium">Back-End Developer</p>
                                <ul class="flex space-x-4 sm:mt-0">
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="text-stone-600 hover:text-gray-900 dark:hover:text-white">
                                            <svg class="w-10 h-10 mt-2" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M7.979 5v1.586a3.5 3.5 0 0 1 3.082-1.574C14.3 5.012 15 7.03 15 9.655V15h-3v-4.738c0-1.13-.229-2.584-1.995-2.584-1.713 0-2.005 1.23-2.005 2.5V15H5.009V5h2.97ZM3 2.487a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" clip-rule="evenodd"/>
                                                <path d="M3 5.012H0V15h3V5.012Z"/></svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

