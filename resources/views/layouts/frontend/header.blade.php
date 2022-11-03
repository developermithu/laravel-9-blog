<nav x-data="{ open: false }" class="bg-white border-b border-gray-200 px-2 sm:px-4 py-2.5 rounded shadow">
    <div class="container flex flex-wrap justify-between items-center mx-auto px-5 sm:px-10 lg:px-40">
        <a href="/" class="flex items-center text-gray-800 hover:opacity-80">
            <span class="self-center text-xl lg:text-2xl font-bold whitespace-nowrap ">LaraApp</span>
        </a>

        {{-- search box --}}
        <div class="flex">
            <form action="{{ route('home') }}" class="hidden relative md:block">
                <div class="flex">
                    <select name="category" class="border-gray-300 rounded-l-lg">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->slug }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <div class="relative w-96">
                        <input name="search" value="{{ request('search') }}" type="search"
                            class="block p-2.5 w-full z-20 text-sm text-gray-800 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-200 focus:ring-gray-800 focus:border-gray-800"
                            placeholder="Search by tags ..." autocomplete="off">
                        <button type="submit"
                            class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-gray-800 rounded-r-lg border border-gray-800 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 flex gap-1.5">
                            <x-icon name='search' class="w-5 h-5" />
                            <span>Search</span>
                        </button>
                    </div>
                </div>
            </form>

            <button @click="open = !open" type="button"
                class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 ">
                <x-icon name='menu' class="w-6 h-6" />
            </button>
        </div>

        <div :class="{ 'block': open, 'hidden': !open }" class="justify-between items-center w-full md:flex md:w-auto "
            id="navbar-search">
            <div class="relative mt-3 md:hidden">
                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                    <x-icon name='search' class="w-5 h-5" />
                </div>
                <input type="text" id="search-navbar"
                    class="block p-2 pl-10 w-full text-gray-800 bg-gray-50 rounded-lg border border-gray-200 sm:text-sm focus:ring-gray-800 focus:border-gray-800"
                    placeholder="Search...">
            </div>
            <ul
                class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-5 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                <li class="hover:bg-gray-100 px-3 py-1.5 rounded">
                    <a href="/"
                        class="block text-white bg-gray-800 rounded md:bg-transparent md:text-gray-800  ">Home</a>
                </li>
                <li class="hover:bg-gray-100 px-3 py-1.5 rounded">
                    <a href="{{ route('categories') }}"
                        class="block text-white bg-gray-800 rounded md:bg-transparent md:text-gray-800  ">Category</a>
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
                    <li class="hover:bg-gray-100 px-3 py-1.5 rounded">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button
                                    class="text-white bg-gray-800 rounded md:bg-transparent md:text-gray-800 md:p-0 flex items-center gap-x-2 ">
                                    Profile
                                    <x-icon name='chevron-down' class="w-4 h-4" />
                                </button>
                            </x-slot>

                            <x-dropdown.item icon="user" label="My Account"
                                href="{{ route('user.account', auth()->user()->name) }}" />
                            <x-dropdown.item href="{{ route('user.articles.index') }}" icon="newspaper"
                                label="My Articles" />
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
