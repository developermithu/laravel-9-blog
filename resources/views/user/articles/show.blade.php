@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div
        class="grid bg-white grid-cols-12 gap-10 lg:gap-20 py-16 container mx-auto px-5 sm:px-10 lg:px-40 overflow-x-hidden">

        <article class=" col-span-12 lg:col-span-8 bg-white border border-gray-200 ">
            <h3 class="font-semibold w-full text-2xl p-3 bg-gray-800 text-white capitalize"> {{ $article->title }} </h3>
            <div class="flex flex-col gap-5">
                <img src='https://cdn.pixabay.com/photo/2017/10/10/21/46/laptop-2838917_960_720.jpg' alt=''
                    class=" w-full" />
                <div class="flex flex-col px-5 pb-5 gap-3 capitalize">
                    {{-- Author & Categories --}}
                    <div class="flex justify-between flex-wrap gap-3 items-center">
                        <p class=" font-semibold">
                            Author: <a href="#" class="text-blue-500 hover:underline">
                                {{ $article->author->name }}
                            </a>
                        </p>
                        <p class="flex flex-wrap gap-2 font-semibold">
                            categories:
                            {!! $article->categories_links !!}
                        </p>
                    </div>

                    <p class=" pt-3 text-gray-600 text-lg leading-relaxed">
                        {!! $article->content !!}
                    </p>

                    <p class="font-semibold">
                        Tags:
                        {!! $article->tags_links !!}
                    </p>
                </div>
            </div>
        </article>

        <aside class=" col-span-12 lg:col-span-4 flex items-center flex-col gap-10">
            {{-- Search --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-gray-800 text-white">Search By Keywords</h3>
                <form action="{{ route('home') }}" method="GET" class="flex items-center justify-between gap-3 p-5">
                    <input type="text" value="{{ request('query') }}" name="query"
                        placeholder="Article title or content..."
                        class="flex-1 rounded py-1.5 border-gray-300 focus:ring-gray-800 focus:border-gray-800">
                    <button type="submit"
                        class=" bg-gray-800 text-white py-1.5 px-4 rounded active:ring-2 active:ring-gray-900 ">Search</button>
                </form>
            </div>

            {{-- category --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-gray-800 text-white">Filter By Category</h3>
                <p class="py-3 ml-6 flex flex-col gap-3 items-start">
                    @forelse ($categories as $category)
                        <a href="{{ route('home') }}?category={{ $category->slug }}"
                            class="text-gray-800 hover:underline font-medium cursor-pointer">
                            {{ $category->name }}

                            @if ($category->articles()->count())
                                <span class="px-2 py-1 ml-2 inline-block bg-gray-800 text-white rounded-full text-xs">
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
                <h3 class="font-semibold w-full text-xl p-3 bg-gray-800 text-white">Filter By Tags</h3>
                <form action="{{ route('home') }}" method="GET" class=" w-48 ml-6 py-3">
                    @forelse ($tags as $tag)
                        <div class="flex items-center">
                            <input id="{{ $tag->name }}" type="checkbox" name="tag[]" value="{{ $tag->slug }}"
                                class="w-4 h-4 text-gray-800 bg-gray-100 rounded border-gray-300 focus:ring-gray-800 ">
                            <label for="{{ $tag->name }}"
                                class="py-2 ml-3 w-full text-sm font-semibold text-gray-800 capitalize ">
                                {{ $tag->name }}
                            </label>
                        </div>
                    @empty
                        None
                    @endforelse

                    <button type="submit"
                        class="px-4 py-1 text-sm mt-2 bg-gray-800 text-white rounded hover:opacity-80">Submit</button>
                </form>
            </div>

            {{-- Tags --}}
            <div class="bg-white border border-gray-200 w-full">
                <h3 class="font-semibold w-full text-xl p-3 bg-gray-800 text-white">Tags</h3>
                <p class="py-3 ml-6 flex gap-3 items-start flex-wrap">
                    @forelse ($tags as $tag)
                        <a href="?tag={{ $tag->slug }}"
                            class="text-[11px] px-3 py-1 bg-gray-800 uppercase text-gray-100 hover:opacity-80 cursor-pointer rounded">
                            {{ $tag->name }}
                        </a>
                    @empty
                        None
                    @endforelse
                </p>
            </div>
        </aside>
    </div>
@endsection
