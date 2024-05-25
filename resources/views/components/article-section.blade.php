   <!-- Left Column -->
    <section {{$attributes->merge(['class' => "w-full md:w-1/2 flex flex-col items-center px-3"])}}>
        <!-- Article -->
        <article class="flex flex-col shadow my-4">
            <!-- Article Image -->
            <a href="#" class="hover:opacity-75">
                <img src="../images/illustration-1.png">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <a href="/categories/{{$post->category->slug}}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{$post->category->name}}</a>
                
                <a href="/posts/{{$post->slug}}" class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
                <p href="#" class="text-sm pb-3">
                    By <a href="/authors/{{$post->author->username}}" class="font-semibold hover:text-gray-800">{{$post->author->name}}</a>, <time>{{$post->created_at->diffForHumans()}}</time>
                </p>
                <a href="/posts/{{$post->slug}}" class="pb-6">{{$post->excerpts}}</a>
                <a href="/posts/{{$post->slug}}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
            </div>
            
        </article>
        
    </section>


        <!-- Pagination -->
    <div class="flex items-center py-8">
        <!-- Pagination content here -->
    </div>

