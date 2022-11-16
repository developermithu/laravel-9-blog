<x-app-layout>
    <x-slot name="title">
        Article List
    </x-slot>

    <div class="bg-white py-16 px-5 sm:px-10 lg:px-40 mx-auto container flex gap-6 items-start justify-between">

        @include('user.sidebar')

        {{-- Data Table --}}
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            {{-- dropdown & search --}}
            <div class=" text-right pb-4">
                <x-button dark label="Create new article" href="{{ route('user.articles.create') }}" />
            </div>

            {{-- table --}}
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                    <tr>
                        <th scope="col" class="p-4">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500  focus:ring-2">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Post Title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Cover Image
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Tags
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($articles->take(50) as $article)
                        <tr class="bg-white border-b hover:bg-gray-50 ">
                            <td class="p-4 w-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500  focus:ring-2">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                                {!! Str::limit($article->title, 20) !!}
                            </th>
                            <td class="py-4 px-6">
                                Image
                            </td>
                            <td class="py-4 px-6">
                                @forelse ($article->categories as $category)
                                    <span class="text-blue-500 text-sm">{{ $category->name }},</span>
                                @empty
                                    <span class="text-red-500">None</span>
                                @endforelse
                            </td>
                            <td class="py-4 px-6">
                                @forelse ($article->tags as $tag)
                                    <span class="text-blue-500 text-sm">{{ $tag->name }},</span>
                                @empty
                                    <span class="text-red-500">None</span>
                                @endforelse
                            </td>
                            <td class="py-4 px-6">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No article found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
