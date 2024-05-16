<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', function () {
       return view('posts', [
        // 'posts' => Post::latest()->with('category', 'author')->get()
        'posts' => Post::latest()->get(),
        'categories' => Category::all()

    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
    //  'posts' => $category->post->load(['category', 'author'])
    'posts' => $category->post,
    'categories' => Category::all()
 ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
    //  'posts' => $author->post->load(['category', 'author'])
     'posts' => $author->post,
     'categories' => Category::all()

 ]);
});


Route::get('posts/{post:slug}', function(Post $post){
    //find a  post by its slug and pass it to the view
    // $post = Post::findOrfail($post);
    return view('post', [
        'post' => $post,
        'categories' => Category::all()

        
    ]);

});