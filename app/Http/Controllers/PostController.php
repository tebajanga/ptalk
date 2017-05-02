<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function create(Request $request){
        //Validation
        $this->validate($request,[
            'body' => 'required|max:1000'
        ]);

        $post = new Post();
        $post->body = $request['body'];
        $message = 'There was an error';

        if($request->user()->posts()->save($post)){
            $message = "Post successful created!";
        }

        return redirect()->route('dashboard')->with(['message' => $message]);
    }
}
