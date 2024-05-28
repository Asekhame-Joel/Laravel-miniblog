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
           <li><a class="hover:text-gray-200 hover:underline px-4" href="#">Welcome {{auth()->user()->username}}</a></li>
           <li><a class="hover:text-gray-200 hover:underline px-4" href="/">Home</a></li>
           <form action="/logout" method="POST">
            @csrf
            <button class="hover:underline px-4">
                Logout
            </button>
           </form>
           @endauth

             @guest   
             <li><a class="hover:text-gray-200 hover:underline px-4" href="/register">Register</a></li>
             <li><a class="hover:text-gray-200 hover:underline px-4" href="/login">Login</a></li>
             <li>
                <a href="#newsletter"   type="submit" class="py-3 px-5 w-full text-sm font-medium text-center text-white rounded-full border cursor-pointer bg-blue-500 border-blue-500 hover:bg-blue-400 focus:ring-4 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-400 dark:focus:ring-blue-300">Subscribe</a>
            </li>
             @endguest
            </ul>
        </nav>
    </div>
</nav>