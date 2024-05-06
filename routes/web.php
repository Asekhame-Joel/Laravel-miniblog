<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('posts');
});

Route::get('posts/{post}', function($slug){
//the slug here represents the value of the post from the URL
$path = __DIR__ . "/../resources/posts/{$slug}.html";
if(! file_exists($path)){
    abort(404);
}

$post = cache()->remember("posts.{$slug}", 5, function () use ($path){
    var_dump('file_get_contents');
    return  file_get_contents($path);
});

return view('post', [
    //here the post which represents the post.blade file.. 
    //is posted and renders a view from the $post which 
    //has a slug of whaterver is rendered in the URL when it is requested
    'post' => $post
]);


});



































// Route::get('posts/{post}', function ($slug){
//     //the slug represents the value from the {post}

//     $path = __DIR__ . "/../resources/posts/{$slug}.html";
//     if(! file_exists($path)){
//         abort(404);
//     }
//     $post = file_get_contents($path);
//     return view('post', [
//         //the post here represent the blade file post.blade
//         'post' => $post
//     ]);
// });



