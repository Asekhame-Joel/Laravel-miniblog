<style>
    html{
        scroll-behavior: smooth;
    }
</style>
<nav class="w-full py-4 bg-blue-800 shadow">
    <div class="w-full container mx-auto flex flex-wrap items-center justify-end">
        <nav>
            <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                @auth
                <div x-data="{ open: false }" class="relative inline-block text-left">
                    <button @click="open = !open" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none 
                    focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" 
                    type="button">
                        Welcome {{ auth()->user()->username }}
                    </button>
                
                    <!-- Dropdown menu -->
                    <div x-show="open" @click.outside="open = false" class="absolute mt-2 z-10 bg-white divide-y divide-gray-100 rounded-lg shadow w-32 dark:bg-gray-700">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <a href="/" class="{{ request()->is('/') ? 'block px-4 py-1 text-blue-500' : 'block px-4 py-1 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white' }}
                                ">All Posts</a>
                            </li>
                            <li>
                                <a href="/posts/admin/create" class="{{ request()->is('/posts/admin/create') ? 'block px-4 py-1 text-red-500' : 'block px-4 py-1 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white' }}
                                    ">New Posts</a>
                            </li>

                            <li>
                                <a href="#" class="block px-4 py-1 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" x-data={} 
                                @click.prevent="document.querySelector('#logout-form').submit()"
                                >Sign out</a>
                                <form id="logout-form" action="/logout" method="POST" class="hidden">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <li><a class="hover:text-gray-200 hover:underline px-4" href="/">Home</a></li>
                
                @endauth
                
                @guest   
                <li><a class="hover:text-gray-200 hover:underline px-4" href="/register">Register</a></li>
                <li><a class="hover:text-gray-200 hover:underline px-4" href="/login">Login</a></li>
                <li>
                    <a href="#newsletter" type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-full border cursor-pointer bg-blue-500 border-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-400 dark:focus:ring-blue-300">Subscribe</a>
                </li>
                @endguest
            </ul>
        </nav>
    </div>
</nav>
