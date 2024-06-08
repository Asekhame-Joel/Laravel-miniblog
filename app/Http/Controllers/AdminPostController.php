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
        $attributes = $this->ValidatePost();
        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        Post::create($attributes);

        return redirect('/')->with('success', 'Your Post has been Created Successfully');
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {

        $attributes = $this->ValidatePost();
        if (isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }
        $post->update($attributes);
        return back()->with('success', 'Post Updated');

    }

    public function destroy(Post $post)
    {
        $post->delete();
        return back()->with('success', 'Post Deleted');


    }
    public function ValidatePost(?Post $post = null): array
    {

        $post ??= new Post();
        //Parameter (?Post $post = null): The function takes an optional parameter $post which can be null 
        //or an instance of the Post model. The ? before Post means 
        //that the parameter can be either a Post instance or null

        return request()->validate([
            'title' => 'required',
            'excerpts' => 'required',
            'thumbnail' => $post->exists() ? ['image'] : ['required', 'image'],
            'body' => 'required',
            'slug' => ['required', Rule::unique('posts', 'slug')->ignore($post->id)],
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);
    }


}
