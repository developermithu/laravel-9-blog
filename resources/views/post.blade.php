<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - Home</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    {{-- highlight js --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/atom-one-dark.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.6.0/highlight.min.js"></script>
    <script>
        // first, find all the div.code blocks
        document.querySelectorAll('.code').forEach(el => {
            // then highlight each
            hljs.highlightAuto(el);
        });
    </script>

</head>

<body>
    <nav class="bg-white border-b border-gray-200 px-2 sm:px-4 py-2.5 rounded shadow">
        <div class="container flex flex-wrap justify-between items-center mx-auto px-20">
            <a href="https://flowbite.com/" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap ">Flowbite</span>
            </a>
            <div class="flex">
                <button type="button" data-collapse-toggle="navbar-search" aria-controls="navbar-search"
                    aria-expanded="false"
                    class="md:hidden text-gray-500  hover:bg-gray-100  focus:outline-none focus:ring-4 focus:ring-gray-200  rounded-lg text-sm p-2.5 mr-1">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Search</span>
                </button>

                <form class="hidden relative md:block">
                    <div class="flex">
                        <label for="search-dropdown" class="mb-2 text-sm font-medium text-blue-500 sr-only ">Your
                            Email</label>
                        <button id="dropdown-button" data-dropdown-toggle="dropdown"
                            class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-blue-500 bg-gray-100 border border-gray-200 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 "
                            type="button">All categories <svg aria-hidden="true" class="ml-1 w-4 h-4"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg></button>
                        <div id="dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow "
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate3d(0px, 464.727px, 0px);">
                            <ul class="py-1 text-sm text-gray-700 " aria-labelledby="dropdown-button">
                                <li>
                                    <button type="button"
                                        class="inline-flex py-2 px-4 w-full hover:bg-gray-100 ">Mockups</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="inline-flex py-2 px-4 w-full hover:bg-gray-100 ">Templates</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="inline-flex py-2 px-4 w-full hover:bg-gray-100 ">Design</button>
                                </li>
                                <li>
                                    <button type="button"
                                        class="inline-flex py-2 px-4 w-full hover:bg-gray-100 ">Logos</button>
                                </li>
                            </ul>
                        </div>
                        <div class="relative w-96">
                            <input type="search" id="search-dropdown"
                                class="block p-2.5 w-full z-20 text-sm text-blue-500 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-200 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search Mockups, Logos, Design Templates..." required="">
                            <button type="submit"
                                class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                                <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                                <span class="sr-only">Search</span>
                            </button>
                        </div>
                    </div>
                </form>

                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>

            <div class="hidden justify-between items-center w-full md:flex md:w-auto " id="navbar-search">
                <div class="relative mt-3 md:hidden">
                    <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor"
                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block p-2 pl-10 w-full text-blue-500 bg-gray-50 rounded-lg border border-gray-200 sm:text-sm focus:ring-blue-500 focus:border-blue-500"
                        placeholder="Search...">
                </div>
                <ul
                    class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main
        class="grid bg-white grid-cols-12 gap-10 lg:gap-20 py-16 container mx-auto px-5 sm:px-10 lg:px-40 overflow-x-hidden">
        <article class=" col-span-12 lg:col-span-8 bg-white border border-gray-200 ">
            <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Newest Articles</h3>
            <div class="flex flex-col gap-5">
                <img src='https://cdn.pixabay.com/photo/2017/10/10/21/46/laptop-2838917_960_720.jpg' alt=''
                    class=" w-full" />
                <div class="flex flex-col px-5 pb-5 gap-3 capitalize text-sm">
                    <h1 class="text-2xl font-semibold text-blue-500 hover:underline cursor-pointer">How to learn react
                        js in 2023</h1>


                    {{-- Author & Categories --}}
                    <div class="flex justify-between flex-wrap gap-3 items-center">
                        <p class=" font-semibold">
                            Author: <a href="#" class="text-blue-500 hover:underline">deveoper mithu</a>
                        </p>
                        <p class="flex flex-wrap gap-2 font-semibold">
                            categories:
                            <a href="#" class="text-blue-500 hover:underline ">Opinion |</a>
                            <a href="#" class="text-blue-500 hover:underline ">tutorial |</a>
                            <a href="#" class="text-blue-500 hover:underline ">tutorial</a>
                        </p>
                    </div>

                    <p class=" pt-3 text-gray-600 leading-relaxed">Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Assumenda eum
                        repudiandae porro optio Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur
                        adipisicing.
                        neque nesciunt sapiente dignissimos officia niam, dolorem sapiente yjkuk dignissimos a ipsam
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe veniam tenetur temporibus
                        doloremque expedita magnam neque vitae ullam, dicta necessitatibus itaque. Similique reiciendis
                        ex eum quibusdam quasi nostrum

                    <p class="py-3 text-gray-600 leading-relaxed">harum neque molestias iusto. Consequatur magnam error
                        hic nihil pariatur amet voluptatem unde atque aliquam, laborum aliquid quo dolores, doloremque
                        voluptate, totam minus quos! Sit consequuntur eaque nemo totam corrupti excepturi quidem dicta
                        aperiam, ipsam eveniet officiis accusantium voluptatum,possimus vitae, ducimus </p>

                    <div class="code whitespace-pre">
                        Route::get('/', function () {
                        return view('index');
                        });

                        Route::get('/post', function () {
                        return view('post');
                        });
                    </div>

                    <p class="py-3 text-gray-600 leading-relaxed">harum neque molestias iusto. Consequatur magnam error
                        hic nihil pariatur amet voluptatem unde atque aliquam, laborum aliquid quo dolores, doloremque
                        voluptate, totam minus quos! Sit consequuntur eaque nemo totam corrupti excepturi quidem dicta
                        aperiam, ipsam eveniet officiis accusantium voluptatum,possimus vitae, ducimus Lorem ipsum,
                        dolor sit amet consectetur adipisicing elit. Cum neque laborum mollitia quis, perspiciatis ipsam
                        aliquid. Veniam dolore maiores aut. </p>
                    </p>

                    <p class=" font-semibold">
                        Tags:
                        <a href="#" class="text-blue-500 hover:underline ">video |</a>
                        <a href="#" class="text-blue-500 hover:underline ">review</a>
                    </p>
                </div>
            </div>
        </article>

        <aside class=" col-span-12 lg:col-span-4 flex items-center flex-col gap-10">
            {{-- Search --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Search By Keywords</h3>
                <div class="flex items-center justify-between gap-3 p-5">
                    <input type="text" placeholder="Search.." class="flex-1 rounded py-1.5 border-gray-300">
                    <button
                        class=" bg-blue-500 text-white py-1.5 px-4 rounded active:ring-2 active:ring-blue-600 ">Search</button>
                </div>
            </div>
            {{-- similar post --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Similar Post</h3>
                <ul class="py-3 px-3 flex flex-col gap-3 items-start">
                    <li class="text-blue-500 w-full hover:underline cursor-pointer flex items-center gap-3">
                        <h4>how to learn react js</h4>
                        <img src="https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png" alt="" class="w-10 rounded">
                    </li>
                    <li class="text-blue-500 w-full hover:underline cursor-pointer flex items-center gap-3">
                        <h4>how to learn react js</h4>
                        <img src="https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png" alt="" class="w-10 rounded">
                    </li>
                    <li class="text-blue-500 w-full hover:underline cursor-pointer flex items-center gap-3">
                        <h4>how to learn react js</h4>
                        <img src="https://cdn.pixabay.com/photo/2018/06/08/00/48/developer-3461405_960_720.png" alt="" class="w-10 rounded">
                    </li>
                
                </ul>
            </div>

            {{-- category --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Category</h3>
                <ul class="py-3 ml-6 flex flex-col gap-3 items-start list-disc">
                    <li class="ml-6 text-blue-500 hover:underline cursor-pointer">web development</li>
                    <li class="ml-6 text-blue-500 hover:underline cursor-pointer">web development</li>
                    <li class="ml-6 text-blue-500 hover:underline cursor-pointer">web development</li>
                    <li class="ml-6 text-blue-500 hover:underline cursor-pointer">web development</li>
                    <li class="ml-6 text-blue-500 hover:underline cursor-pointer">web development</li>
                </ul>
            </div>

            {{-- Checkbox --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Technology</h3>
                <ul class=" w-48 ml-6 py-3">
                    <li class="w-full ">
                        <div class="flex items-center">
                            <input id="vue-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                            <label for="vue-checkbox" class="py-2 ml-3 w-full text-sm  text-blue-600 ">Vue
                                JS</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ">
                            <input id="react-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                            <label for="react-checkbox" class="py-2 ml-3 w-full text-sm  text-blue-600 ">React</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ">
                            <input id="angular-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                            <label for="angular-checkbox"
                                class="py-2 ml-3 w-full text-sm  text-blue-600 ">Angular</label>
                        </div>
                    </li>
                    <li class="w-full ">
                        <div class="flex items-center ">
                            <input id="laravel-checkbox" type="checkbox" value=""
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                            <label for="laravel-checkbox"
                                class="py-2 ml-3 w-full text-sm  text-blue-600 ">Laravel</label>
                        </div>
                    </li>
                </ul>

            </div>

            {{-- Tags --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Tags</h3>
                <ul class="py-3 ml-6 flex gap-3 items-start flex-wrap">
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">
                        laravel</li>
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">php
                    </li>
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">js
                    </li>
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">
                        react</li>
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">
                        vuejs</li>
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">
                        laravel</li>
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">php
                    </li>
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">js
                    </li>
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">
                        react</li>
                    <li class="text-sm px-3 py-1 bg-blue-500 text-gray-100 hover:opacity-80 cursor-pointer rounded">
                        vuejs</li>
                </ul>
            </div>
        </aside>
    </main>

</body>

</html>
