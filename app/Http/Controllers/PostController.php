<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost(){
        $posts = DB::table('posts')->paginate(10);
        return view('posts',compact('posts'));
    }
    public function addPost(){
        return view('add-post');
    }

    public function addPostSubmit(Request $request){
        DB::table('posts')->insert([
            'title' => $request-> title,
            'body' => $request-> body
        ]);
     
        $request-> file -> store('public');
        return back()-> with('post_created','Post has been created Successfully!');
    }

    public function getPostById($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }

    public function deletePost($id){
        DB::table('posts')->where('id',$id)-> delete();
        return back()->with('post_deleted','Post has been deleted successfully');
    }

    public function editPost($id){
        $post= DB::table('posts')->where('id',$id)->first();
        return view('edit-post',compact('post'));

    }
    public function updatePost(Request $request){
        DB::table('posts')->where('id',$request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()-> with('post_updated','Post has been updated successfully!');
    }

    public function innerJoinCaluse(){
        $request = DB::table('users')
                    -> join('posts','user.id', '=','posts.user_id')
                    -> select('users.name','posts.title','posts.body')
                    ->get();

        dd ($request);
    }
    public function getAllPostsUsingModel(){
        $posts =Post::all();
        return $posts;
    }
    public function localization(Request $request,$locale) {
        //set’s application’s locale
        app()->setLocale($locale);
        
        //Gets the translated message and displays it
        //echo trans('lang.msg');
        return view('welcome');
     }
}
