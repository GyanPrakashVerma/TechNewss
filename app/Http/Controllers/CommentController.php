<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Auth;
use App\Models\Post;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $comm=Comment::where('delete_status', 0)->get();
        $comm1=Comment::where('status','1')->get();
        $comm2=Comment::where('status','0')->get();
        return view('backend.comment.index',compact('comm','comm1','comm2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment=new Comment;
        // $comment->post_id=$request->name;
        $comment->name=$request->name;
        $comment->email=$request->email;
        $comment->message=$request->msg;
        $comment->post_id=$request->post_id;
        $comment->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
       return view('backend.comment.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        $comment->name=$request->name;
        $comment->email=$request->email;
        $comment->message=$request->msg;
        $comment->post_id=$request->post_id;
        $comment->status = $request->status;
        $comment->save();
        return redirect()->route('comment.index')->with('success','Comment updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete_status=1;
        $comment->save();
        return redirect()->route('comment.index')->with('success','Comment deleted sucessfully');
    }
}
