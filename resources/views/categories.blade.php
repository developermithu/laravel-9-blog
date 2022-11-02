@extends('layouts.app')

@section('title', 'All category')

@section('content')
    <section class="bg-white ">
        <div class="container px-5 sm:px-10 lg:px-40 py-10 mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-semibold text-gray-800 capitalize lg:text-4xl ">All category</h1>

                <p class="max-w-lg mx-auto mt-4 text-gray-500">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                    laudantium
                    quia tempore delect
                </p>
            </div>

            <div class="grid grid-cols-1 lg:gap-12 gap-8 mt-8 lg:grid-cols-2">

                @forelse ($categories as $category)
                    <div>
                        <img class="relative z-10 object-cover w-full rounded-md h-96"
                            src="https://cdn.pixabay.com/photo/2016/11/19/15/32/code-1839877_960_720.jpg"
                            alt="">

                        <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow ">
                            <a href="#" class="font-semibold text-gray-800 hover:underline  md:text-2xl capitalize">
                                {{ $category->name }}
                            </a>

                            <p class="mt-3 text-sm text-blue-500 flex items-center justify-between">
                                <span>{{ $category->created_at->diffForHumans() }}</span>
                                <span>
                                    {{ $category->articles->count() }}
                                    {{ Str::plural('Article', $category->articles->count()) }}
                                </span>
                            </p>
                        </div>
                    </div>
                @empty
                    <h2 class=" text-4xl p-10 text-center font-semibold">There is no category found</h2>
                @endforelse

            </div>
        </div>
    </section>
@endsection
