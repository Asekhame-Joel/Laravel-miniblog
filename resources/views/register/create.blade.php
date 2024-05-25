<x-layout>

    <div class="flex items-center justify-center h-screen">
        
        <form action="/register" method="POST" class="bg-white shadow-md bg-gray-100 rounded px-8 pt-6 pb-8 mb-4 w-1/2">
            @csrf
            <h1 class="text-center px-5 py-5 bg-gray-100 rounded">Register</h1>
            <div class="w-full mx-auto  max-w-sm">
                <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                      Name
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" value="{{old('name')}}" placeholder="">
               @error('name')
                 <p class="text-red-500 sm">{{$message}}</p>  
               @enderror
                </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                      Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" name="username" type="text" value="{{old('username')}}" placeholder="">
                    @error('username')
                    <p class="text-red-500 sm">{{$message}}</p>  
                  @enderror 
                </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                      Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" name="email" type="text "value="{{old('email')}}" placeholder="">
                    @error('email')
                    <p class="text-red-500 sm">{{$message}}</p>  
                  @enderror 
                </div>
                  <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                     Password 
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="">
                    @error('password')
                    <p class="text-red-500 sm">{{$message}}</p>  
                  @enderror 
                </div>
                  <div class="flex items-center justify-center px-5">
                    <button class="bg-blue-500 hover:bg-blue-700 px-8 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                      Register
                    </button>
                  </div>
                </form>
              </div>
                   </form>
      </div>    
</x-layout>