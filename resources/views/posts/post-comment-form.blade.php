<form method="POST" action="/posts/{{$post->slug}}/comments">
    @csrf
    <article class="flex flex-col bg-gray-100 border border-gray-200 p-6 mt-6 mr-5 ml-5 rounded-xl space-y-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="60" height="60" class="rounded-xl">
        </div>

        <div class="flex-grow">
            <div class="mb-4">
                <div><h1 class="text-lg font-bold">Want to Participate?</h1></div>

                <textarea name="body" class="w-full p-2 border border-gray-300 rounded" rows="4" placeholder="Write your comment here..." required></textarea>
           @error('body')
           <p class="text-red-700">{{$message}}</p> 
           @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Post
                </button>
            </div>
        </div>
    </article>
</form>