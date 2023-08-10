<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {

    $title='';
    if(request('category')) {
        $category = Category::firstWhere('slug', request('category'));
        $title = ' in ' . $category->name;
    }

    if(request('user')) {
        $user = User::firstWhere('username', request('user'));
        $title = ' in ' . $user->username;
    }
    
    return view('posts', [
        "title" => "All Posts" . $title,
        "active" => "Blog",
        "posts" => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(5)->withQueryString()
    ]);
    }

    public function show(Post $post)
    {
        
    return view('post', [
        "title" => "Single post",
        "post" => $post,
        "active" => "Blog"
    ]);
    }
}


