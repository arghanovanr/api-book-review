<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    function store(Request $request)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->book_id = $request->book_id;
        $result = $comment->save();
        if ($result) {
            return  ["Result" => "data has been created"];
        } else {
            return  ["Result" => "Operation Failed"];
        }
    }

    function update($id, Request $request)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->comment = $request->comment;
        $comment->book_id = $id;
        $result = $comment->save();
        if ($result) {
            return  ["Result" => "data has been update"];
        } else {
            return  ["Result" => "Operation Failed"];
        }
    }

    function delete($id)
    {
        $data = Comment::find($id);
        $result = $data->delete();
        if ($result) {
            return  ["Result" => "data has been deleted"];
        } else {
            return  ["Result" => "Operation Failed"];
        }
    }
}
