<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Mockery\Exception\InvalidOrderException;

class AdminPostController extends Controller
{


    public function index()
    {

        return view('admin.posts.index', [
            'posts' => Post::paginate() 

        ]);

    }

    
    public function create()
    {
        return view('admin.posts.create');
    }


    public function store()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'excerpts' => 'required',
            'thumbnail' => 'required|image',
            'body' => 'required',
            'slug' => 'required|unique:posts,slug',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Post::create($attributes);

        return redirect('/')->with('success', 'Your Post has been Created Successfully');
    }

    public function edit(Post $post){
        return view('admin.posts.edit', [
            'post' => $post
        ]);
        }

}
