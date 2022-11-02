<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 px-2 sm:px-4 py-2.5 rounded shadow">
    <div class="container flex flex-wrap justify-between items-center mx-auto px-5 sm:px-10 lg:px-40">
        <a href="/" class="flex items-center text-gray-800 hover:opacity-80">
            <span class="self-center text-xl lg:text-2xl font-bold whitespace-nowrap ">LaraApp</span>
        </a>

        {{-- search box --}}
        <div class="flex">
            {{-- mobile search --}}
            <button type="button"
                class="md:hidden text-gray-500 hover:bg-gray-100  focus:outline-none focus:ring-4 focus:ring-gray-200  rounded-lg text-sm p-2.5 mr-1">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Search</span>
            </button>

            <form action="{{ route('home') }}" class="hidden relative md:block">
                <div class="flex">
                    <select name="category" class="border-gray-300 rounded-l-lg">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="relative w-96">
                        <input name="search" value="{{ request('search') }}" type="search" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-800 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-200 focus:ring-gray-800 focus:border-gray-800"
                            placeholder="Search by tags ..." autocomplete="off">
                        <button type="submit"
                            class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-gray-800 rounded-r-lg border border-gray-800 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300">
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

            <button @click="open = !open" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                <span class="sr-only">Open menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div :class="{ 'block': open, 'hidden': !open }" class="justify-between items-center w-full md:flex md:w-auto "
            id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="search-navbar"
                    class="block p-2 pl-10 w-full text-gray-800 bg-gray-50 rounded-lg border border-gray-200 sm:text-sm focus:ring-gray-800 focus:border-gray-800"
                    placeholder="Search...">
            </div>
            <ul
                class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-5 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                <li class="hover:bg-gray-100 px-3 py-1.5 rounded">
                    <a href="/"
                        class="block text-white bg-gray-800 rounded md:bg-transparent md:text-gray-800 md:p-0 ">Home</a>
                </li>
                <li class="hover:bg-gray-100 px-3 py-1.5 rounded">
                    <a href="{{ route('categories') }}"
                        class="block text-white bg-gray-800 rounded md:bg-transparent md:text-gray-800 md:p-0 ">Category</a>
                </li>


                @guest
                    <li class="hover:bg-gray-100 px-3 py-1.5 rounded">
                        <a href="/login"
                            class="block text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-800 md:p-0">Login</a>
                    </li>
                    <li class="hover:bg-gray-100 px-3 py-1.5 rounded">
                        <a href="/register"
                            class="block text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-gray-800 md:p-0">Register</a>
                    </li>
                @endguest

                @auth
                    <!-- Auth User Profile -->
                    {{-- <li class="hidden sm:flex sm:items-center sm:ml-6 hover:bg-gray-100 px-3 py-1.5 rounded">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button
                                    class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    Profile

                                    <div class="ml-1 mt-1">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('user.articles.create')">
                                    Create Article
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </li> --}}
                    <li class="hover:bg-gray-100 px-3 py-1.5 rounded">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button
                                    class="text-white bg-gray-800 rounded md:bg-transparent md:text-gray-800 md:p-0 flex items-center gap-x-2 ">
                                    Profile
                                    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                    </svg>
                                </button>
                            </x-slot>

                            <x-dropdown.item icon="user" label="My Profile" />
                            <x-dropdown.item href="{{ route('user.articles.create') }}" icon="pencil-alt"
                                label="Create Article" />
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown.item :href="route('logout')"
                                    onclick="event.preventDefault();
                                        this.closest('form').submit();"
                                    icon="logout" label="Logout" />
                            </form>
                        </x-dropdown>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
