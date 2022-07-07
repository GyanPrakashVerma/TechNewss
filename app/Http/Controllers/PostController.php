<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->user_type=="admin"){
        $post=Post::where('delete_status', 0)->get();
    }
    else{
        $post=Post::where('user_id',Auth::user()->id)->where('delete_status', 0)->get();
    }
        return view('backend.post.index', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::where('status','1')->where('delete_status', 0)->get();
        return view('backend.post.create',compact('category'));
    }

    /**
     * Store a newly created resource in {{-- storage.--}} 
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
        $post =new Post;
        $post->user_id=Auth::user()->id;
        $post->category_id=$request->category;
        $post->title=$request->post_title;
        $post->short_description=$request->short_description;
        $post->description=$request->description;
        if($request->post_image!=null){
            $file_photo=time().'.'.request()->post_image->getClientOriginalExtension();
            $request->post_image->move(public_path('post_image'),$file_photo);
            $post->images=$file_photo;
        }
        $post->save();
        return redirect()->route('post.index')->with('success','post added sucessfully'); 
    }

    /**
     * Display the specified resource.
      *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::where('status','1')->where('delete_status', 0)->get();
        $edit_post=Post::find($id);
       return view('backend.post.edit', compact('category','edit_post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Post::find($id);
        $post->category_id=$request->category;
        $post->title=$request->post_title;
        $post->short_description=$request->short_description;
        $post->description=$request->description;
        if($request->post_image!=null){
            $file_photo=time().'.'.request()->post_image->getClientOriginalExtension();
            $request->post_image->move(public_path('post_image'),$file_photo);
            $post->images=$file_photo;
        }
        $post->status = $request->status;
        $post->t_status = $request->tstatus;
        $post->save();
        return redirect()->route('post.index')->with('success','post added sucessfully');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete_status=1;
        $post->save();
        return redirect()->route('post.index')->with('success','Post deleted sucessfully');
    }
}
