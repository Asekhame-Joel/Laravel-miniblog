<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Services\Newsletters;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;

use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('/', [PostController::class, 'index']);

Route::get('posts/{post:slug}',[PostController::class, 'show']);

Route::get('categories/{category:slug}', [CategoryController::class, 'allCategory']);

Route::get('authors/{author:username}', function (User $author) {
    return view('posts.index', [
    //  'posts' => $author->post->load(['category', 'author'])
     'posts' => $author->posts,
     'categories' => Category::all()
 ]);
});

Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [RegisterController::class, 'store']);
Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

Route::get('login', [SessionsController::class, 'create']);
Route::post('login', [SessionsController::class, 'store']);

Route::post('posts/{post:slug}/comments', [CommentController::class, 'store']);

Route::post('newsletter', NewsletterController::class);





