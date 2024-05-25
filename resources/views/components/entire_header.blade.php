{{-- @props(['categories', 'currentCategory']) --}}

<!-- Your component HTML here -->
   <!-- Topic Nav -->
   <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
    <div class="block sm:hidden">
        <a
            href="#"
            class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
            @click="open = !open"
        >
            Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
        </a>
    </div>
    
    <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
        <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="/" 
                class="hover:bg-gray-400 rounded py-2 px-4 mx-2">
                All
             </a>
            @foreach($categories as $category)
                <a href="/categories/{{$category->slug}}" 
                   class="hover:bg-gray-400 rounded py-2 px-4 mx-2
                {{ request()->is('categories/'.$category->slug) ? 'bg-gray-400' : '' }}">
                   {{ $category->name }}
                </a>
            @endforeach
        </div>
{{-- 
  <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
            <a href="{{ url('/') }}" class="hover:bg-gray-400 rounded py-2 px-4 mx-2
            {{ request()->is('/') ? '' : 'bg-gray-400' }}">
            All
        </a>
            @foreach($categories as $category)
            <a href="/?category={{ $category->slug }}" 
                class="hover:bg-gray-400 rounded py-2 px-4 mx-2 
                {{ request('category') === $category->slug ? 'bg-gray-400' : '' }}">
                {{ $category->name }}
             </a>
              --}}
        
      <form action="" method="GET">
        <div class="flex justify-center items-center mr-8">
    <input type="text" name= "search" placeholder="find Something" class="border border-gray-400 rounded py-3 px-4 mx-2"
     value="{{request('search')}}">
    </div>
</form>

    </div>
    
</nav>