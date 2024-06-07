<x-layout>
    <x-header>
        Manage Posts
    </x-header>

    <div class="flex items-start justify-center mt-10">
        <!-- Side Panel -->
        <div class="w-1/4 bg-white p-6 rounded-lg shadow-md mr-8">
            <h2 class="text-2xl font-bold mb-6 text-gray-800">Menu</h2>
            <ul class="space-y-4">
                <li>
                    <a href="/admin/posts" class="block p-3 bg-blue-500 text-white rounded-lg hover:bg-blue-700 transition duration-300">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="/posts/admin/create" class="block p-3 bg-green-500 text-white rounded-lg hover:bg-green-700 transition duration-300">
                        New Post
                    </a>
                </li>
            </ul>
        </div>
        

        <!-- Table -->
        <div class="w-3/4 relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Post Title</th>
                        <th scope="col" class="px-6 py-3">Slug</th>
                        <th scope="col" class="px-6 py-3">Category</th>
                        <th scope="col" class="px-6 py-3">Actions</th>
                        <th scope="col" class="px-6 py-3">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$post->title}}</th>
                        <td class="px-6 py-4">{{$post->slug}}</td>
                        <td class="px-6 py-4">{{$post->category->name}}</td>
                        <td class="px-6 py-4">
                            <a href="/admin/posts/{{$post->id}}/edit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700 ">Delete</a>
                        @endforeach

                    </tr>                </tbody>
            </table>
        </div>
    </div>
</x-layout>
