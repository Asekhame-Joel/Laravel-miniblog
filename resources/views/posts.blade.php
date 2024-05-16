<x-layout>

    <body class="bg-white font-family-karla">
        <x-nav/>
        <x-header/>
        <x-entire_header :categories="$categories"/>
        @if($posts->count())
        <x-featured_post :post="$posts[0]"/>

    <div class="container mx-auto flex flex-wrap py-6">
      
        @foreach($posts->skip(1) as $post)
        {{-- @dd($loop) --}}
        <x-article-section :post="$post" class="{{ ($loop->index % 5) > 2 ? 'md:w-1/2' : 'md:w-1/3' }}"/>
            {{-- <x-article-section :post="$post" class="md:w-1/3"/> --}}
     
@endforeach
</div>
@else

<h1>
<p class="text-center w-full py-4 border-t border-b bg-gray-100 my-4">No Posts Available</p>
</h1>

@endif
</x-layout>
