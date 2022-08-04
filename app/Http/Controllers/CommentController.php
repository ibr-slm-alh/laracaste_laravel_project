<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post){
        //validate
        request()->validate([
            'body'=>'required'
        ]);

        $post->comments()->create([
            'user_id' =>optional(request()->user())->id,
            'body' => request('body')
        ]);

        return back();
    }
}
