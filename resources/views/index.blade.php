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
        <div class="container flex flex-wrap justify-between items-center mx-auto px-5 sm:px-10 lg:px-40">
            <a href="/" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
                <span class="self-center text-xl font-semibold whitespace-nowrap ">Mithu's Blog</span>
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
                        <select name="category" class="border-gray-300 rounded-l-lg">
                            <option value="">Select Category</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->slug }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <div class="relative w-96">
                            <input name="search" value="{{ request('search') }}" type="search" id="search-dropdown"
                                class="block p-2.5 w-full z-20 text-sm text-blue-500 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-200 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Search by tags ...">
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
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
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
                        <a href="/"
                            class="block py-2 pr-4 pl-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 "
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="/categories"
                            class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Category</a>
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
            <div class="w-full p-3 bg-blue-500 text-white flex items-center justify-between">
                <h1 class="font-semibold text-xl">Newest Articles</h1>

                @if (request('query') != '')
                    <div>
                        {{ $articles->count() }} {{ Str::plural('Result', $articles->count()) }} Found
                    </div>
                @endif
            </div>

            @forelse ($articles as $article)
                <div class="px-5 py-10 border-b flex flex-col lg:flex-row items-start justify-between gap-5">
                    <img src='https://cdn.pixabay.com/photo/2017/10/10/21/46/laptop-2838917_960_720.jpg'
                        alt=''
                        class=" w-80 h-60 hover:scale-105 transition duration-500 hover:grayscale cursor-pointer" />
                    <div class="flex flex-col gap-3 capitalize text-sm">
                        <h3 class="text-2xl font-semibold text-blue-500 hover:underline cursor-pointer">
                            {{ $article->title }}
                        </h3>
                        <p class=" font-semibold">
                            Author: <a href="#" class="text-blue-500 hover:underline">
                                {{ $article->author->name }}
                            </a>
                        </p>
                        <p class="flex flex-wrap gap-2 font-semibold">
                            <span>categories:</span>
                            {!! $article->categories_links !!}
                        </p>

                        <p class="font-semibold">
                            <span>Tags:</span>
                            {!! $article->tags_links !!}
                        </p>

                        <p class=" text-gray-600">
                            {!! Str::limit($article->content, 180, '...') !!}
                            <span class=" text-blue-500 hover:underline cursor-pointer">Read more</span>
                        </p>
                    </div>
                </div>
            @empty
                <h2 class=" text-4xl font-bold text-red-500 text-center py-5">There is no article</h2>
            @endforelse

            <div class="p-5">
                {{ $articles->links() }}
            </div>
        </article>

        <aside class=" col-span-12 lg:col-span-4 flex items-center flex-col gap-10">
            {{-- Search --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Search By Keywords</h3>
                <form action="{{ route('home') }}" method="GET"
                    class="flex items-center justify-between gap-3 p-5">
                    <input type="text" value="{{ request('query') }}" name="query"
                        placeholder="Article title or content..." class="flex-1 rounded py-1.5 border-gray-300">
                    <button type="submit"
                        class=" bg-blue-500 text-white py-1.5 px-4 rounded active:ring-2 active:ring-blue-00 ">Search</button>
                </form>
            </div>
            {{-- category --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Filter By Category</h3>
                <p class="py-3 ml-6 flex flex-col gap-3 items-start">
                    @forelse ($categories as $category)
                        <a href="?category={{ $category->slug }}"
                            class="text-blue-500 hover:underline cursor-pointer">
                            {{ $category->name }}

                            @if ($category->articles()->count())
                                <span class="px-2 py-1 ml-2 inline-block bg-blue-500 text-white rounded-full text-xs">
                                    {{ $category->articles()->count() }}
                                </span>
                            @endif
                        </a>
                    @empty
                        None
                    @endforelse
                </p>
            </div>

            {{-- Checkbox --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Filter By Tags</h3>
                <form action="{{ route('home') }}" method="GET" class=" w-48 ml-6 py-3">
                    @forelse ($tags as $tag)
                        <div class="flex items-center">
                            <input id="{{ $tag->name }}" type="checkbox" name="tag[]"
                                value="{{ $tag->slug }}"
                                class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 ">
                            <label for="{{ $tag->name }}"
                                class="py-2 ml-3 w-full text-sm  text-blue-600 capitalize ">
                                {{ $tag->name }}
                            </label>
                        </div>
                    @empty
                        None
                    @endforelse

                    <button type="submit"
                        class="px-4 py-1 text-sm mt-2 bg-blue-500 text-white rounded hover:opacity-80">Submit</button>
                </form>
            </div>

            {{-- Tags --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-blue-500 text-white">Tags</h3>
                <p class="py-3 ml-6 flex gap-3 items-start flex-wrap">
                    @forelse ($tags as $tag)
                        <a href="?tag={{ $tag->slug }}"
                            class="text-[11px] px-3 py-1 bg-blue-500 uppercase text-gray-100 hover:opacity-80 cursor-pointer rounded">
                            {{ $tag->name }}
                        </a>
                    @empty
                        None
                    @endforelse
                </p>
            </div>
        </aside>
    </main>

</body>

</html>
