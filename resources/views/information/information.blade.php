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
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection

