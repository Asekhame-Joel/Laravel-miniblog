<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\MustbeAdmin;

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

Route::get('posts/admin/create', [AdminPostController::class, 'create'])->middleware(MustbeAdmin::class);
Route::post('posts/admin', [AdminPostController::class, 'store'])->middleware(MustbeAdmin::class);
Route::get('admin/posts', [AdminPostController::class, 'index'])->middleware(MustbeAdmin::class);

Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware(MustbeAdmin::class);











