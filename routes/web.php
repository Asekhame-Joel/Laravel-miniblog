<?php

use App\Http\Controllers\AdminPostController;
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


// Route::get('posts/admin/create', [PostController::class, 'create'])->middleware('admin');
// Route::get('posts/admin/create', [AdminPostController::class, 'create'])->middleware('can:admin');
// Route::post('posts/admin', [AdminPostController::class, 'store'])->middleware('can:admin');
// Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware('can:admin');
// Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('can:admin');
// Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('can:admin');
// Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('can:admin');

Route::middleware('can:admin')->group(function(){
Route::get('posts/admin/create', [AdminPostController::class, 'create']);
Route::post('posts/admin', [AdminPostController::class, 'store']);
Route::get('admin/posts', [AdminPostController::class, 'index']);
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
});













