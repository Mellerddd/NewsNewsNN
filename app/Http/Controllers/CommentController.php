<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;

class CommentController extends Controller
{
    public function leave()
    {
        return view('leave.comment');
    }

    public function submit(CommentRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->user()->id;

        $comment = Comment::create($data);
        return redirect()->route('home');
    }
}
