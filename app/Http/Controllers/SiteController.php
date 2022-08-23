<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Comment;

class SiteController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
    public function contact()
    {
        return view('contact');
    }
    public function reviews()
    {
        $comments = Comment::all();
        return view('reviews', compact('comments'));
    }
}
