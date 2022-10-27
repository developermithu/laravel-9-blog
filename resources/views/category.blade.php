<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog - Home</title>

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

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

    <section class="bg-white ">
        <div class="container px-5 sm:px-10 lg:px-40 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-semibold text-blue-500 capitalize lg:text-4xl ">All category</h1>

                <p class="max-w-lg mx-auto mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                    laudantium
                    quia tempore delect
                </p>
            </div>

            <div class="grid grid-cols-1 lg:gap-12 gap-8 mt-8 lg:grid-cols-2">
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="https://images.unsplash.com/photo-1644018335954-ab54c83e007f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="">

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow ">
                        <a href="#" class="font-semibold text-gray-800 hover:underline  md:text-xl">
                            web design
                        </a>

                        <p class="mt-3 text-sm text-blue-500 flex items-center justify-between">
                            <span>20 October 2019</span>
                            <span>10 posts</span>
                        </p>
                    </div>
                </div>

                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="">

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow ">
                        <a href="#" class="font-semibold text-gray-800 hover:underline  md:text-xl">
                            web development
                        </a>

                        <p class="mt-3 text-sm text-blue-500 flex items-center justify-between">
                            <span>20 October 2019</span>
                            <span>10 posts</span>
                        </p>
                    </div>
                </div>
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="https://images.unsplash.com/photo-1644018335954-ab54c83e007f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="">

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow ">
                        <a href="#" class="font-semibold text-gray-800 hover:underline  md:text-xl">
                            web design
                        </a>

                        <p class="mt-3 text-sm text-blue-500 flex items-center justify-between">
                            <span>20 October 2019</span>
                            <span>10 posts</span>
                        </p>
                    </div>
                </div>

                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                        alt="">

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow ">
                        <a href="#" class="font-semibold text-gray-800 hover:underline  md:text-xl">
                            web development
                        </a>

                        <p class="mt-3 text-sm text-blue-500 flex items-center justify-between">
                            <span>20 October 2019</span>
                            <span>10 posts</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>

</html>
