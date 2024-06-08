<x-layout>
    <div class="flex items-center justify-center mt-10">
        <form action="/admin/posts/{{$post->id}}" method="POST" class="bg-white shadow-md bg-gray-100 rounded px-8 pt-6 pb-8 mb-4 w-1/2"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="flex">
                <!-- Side Panel -->
                <div class="w-1/3 bg-white p-6 rounded-lg shadow-md mr-5">
                    <h2 class="text-2xl font-bold mb-6 text-gray-800">Menu</h2>
                    <ul class="space-y-4">
                        <li>
                            <a href="/admin/posts"
                                class="block p-3 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                                Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="/posts/admin/create"
                                class="block p-3 bg-green-500 text-white rounded-lg hover:bg-green-700 transition duration-300">
                                New Post
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Main Form Fields -->
                <div class="w-3/4">
                    <h1 class="text-center px-5 py-5 bg-gray-100  text-lg rounded">Edit Post</h1>
                    <h1 class="text-center px-5 py-5 bg-gray-100  text-lg rounded">Post Title: {{ $post->title }}</h1>

                    <x-form.form-container>
                        <x-form.input name="title" :value="$post->title" />

                        <div class="flex mt-6">
                            <div class="flex-1">
                                <x-form.input name="thumbnail" type="file" :value="$post->thumbnail" />
                            </div>

                            <img src="{{ asset('storage/' . $post->thumbnail) }}" class="ml-6" width="70">

                        </div>

                        <x-form.textarea name="excerpts"> {{ old('excerpts', $post->excerpts) }} </x-form.textarea>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="category_id">
                                Category
                            </label>
                            @php
                                $categories = App\Models\Category::all();
                            @endphp
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="category_id" name="category_id">
                                {{-- <option value="" selected disabled>Select Category</option> --}}
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-red-500 sm">{{ $message }}</p>
                            @enderror
                        </div>
                        <x-form.textarea name="body"> {{ old('body', $post->body) }} </x-form.textarea>
                        <x-form.textarea name="slug"> {{ old('slug', $post->slug) }} </x-form.textarea>
                        <x-form.form-button>Update Post</x-form.form-button>
                    </x-form.form-container>
                </div>
            </div>
        </form>
    </div>
</x-layout>
