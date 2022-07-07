<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\User;

class TechController extends Controller
{
     public function home(){
        $category= Category ::where('status','1')->where('delete_status',0)->get();
        $posts= Post ::where('status','1')->where('delete_status',0)->get();
        $trendind_post=Post::where('t_status','1')->where('delete_status',0)->take(3)->get();
        return view('frontend.index',compact('category','posts','trendind_post'));
    }
    public function post($id){
        $posts= Post::find($id);
        $category= Category ::where('status','1')->where('delete_status',0)->get();
        $comments = Comment::where('post_id', $id)->where('status', 1)->get();
        $post1= Post ::where('status','1')->where('delete_status',0)->get();
        return view('frontend.post',compact('posts','category','comments','post1'));
    }
    public function show_post($id){
        $posts= Post::find($id);
        $category= Category ::where('status','1')->where('delete_status',0)->get();
        $post=Post::where('category_id',$id)->where('delete_status',0)->get();
        return view('frontend.show_post',compact('posts','post','category'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function Login(){
        return view('frontend.login');
    }
    public function register(){
        return view('frontend.register');
    }
    
}
