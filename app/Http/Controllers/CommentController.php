<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Idea;
use App\Models\Comment;

class CommentController extends Controller
{
    public function submit(Idea $id){
        $comment = Comment::create([
            'idea_id' => $id->id,
            'content' =>request()->get('comment','')
        ]);

        $comment->save();

        return redirect()->route('showDashboard')->with('success','Comment Created!');
    }
}
