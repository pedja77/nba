<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function __construct(){

        $this->middleware('forbidden', ['only' => 'store']);
    }

    public function store() {
        //dd(request());
        $this->validate(request(),[
            'content' => 'required|min:10'
        ]);
        
        $comment = new Comment();
        $comment->content = request()->content;
        $comment->team_id = request()->team_id;
        $comment->user_id = \Auth::user()->id;

        $comment->save();

        return redirect('/teams/' . request()->team_id);
    }

    public function forbidden() {
        return view('forbidden-comment');
    }
}
