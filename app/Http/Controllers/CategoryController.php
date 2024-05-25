<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategory(Category $category){
        return view('posts.index', [
            //  'posts' => $category->post->load(['category', 'author'])
            // 'posts' => $category->post
            'posts' => $category->post()->with(['category', 'author'])->paginate(1), // Use paginate
            'categories' => Category::all()
         ]);
    }
}
