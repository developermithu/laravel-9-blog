<div class="flex flex-col w-64 py-8 bg-white border ">
    <div class="flex flex-col items-center mt-6 -mx-2">
        <img class="object-cover w-24 h-24 mx-2 rounded-full"
            src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80"
            alt="avatar">
        <h4 class="mx-2 mt-2 font-medium text-gray-800  hover:underline">
            {{ auth()->user()->name }}
        </h4>
        <p class="mx-2 mt-1 text-sm font-medium text-gray-600 hover:underline">
            {{ auth()->user()->email }}
        </p>
    </div>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <nav>
            <a href="{{ route('user.account', auth()->user()->name) }}"
                class="flex items-center px-4 py-2 {{ request()->routeIs('user.account', auth()->user()->name) ? 'text-gray-700 bg-gray-100' : 'text-gray-600 bg-transparent' }}">
                <x-icon name='user' class="w-5 h-5" />
                <span class="mx-4 font-medium">My Account</span>
            </a>

            <a class="flex items-center px-4 py-2 mt-5 transition-colors duration-300 transform hover:bg-gray-200 hover:text-gray-700 {{ request()->routeIs('user.articles.index') ? 'text-gray-700 bg-gray-100' : 'text-gray-600 bg-transparent' }}"
                href="{{ route('user.articles.index') }}">
                <x-icon name='newspaper' class="w-5 h-5" />
                <span class="mx-4 font-medium">Articles</span>
            </a>

            <a
                class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-300 transform hover:bg-gray-200  hover:text-gray-700">
                <x-icon name='cog' class="w-5 h-5" />
                <span class="mx-4 font-medium">Settings</span>
            </a>
        </nav>
    </div>
</div>
