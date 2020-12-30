<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Notifications\PostApprovedNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostControler extends Controller
{
    public function index(){
//        $posts=Post::all();
        $post= new Post();
        $posts=$post->getPosts();
        return view('posts')->with('posts', $posts);
    }
    public function show($id){
        $post = Post::findOrFail($id);
        return view('post')->with('post',$post);
    }
    public function create(){
        return view('create');
    }

    public function save(Request $request){
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'text' => 'required',
            'image' => 'required'
        ]);

        $user=Auth::user();
        $post=new Post($request->all());
        $post->user_id=$user->id;
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('img/post_image/', $filename);
            $post->image=$filename;
        }else{
            abort(500);
        }

        $post->save();
        return redirect()->back();
    }

    public function edit($postid){
        $post=Post::findOrFail($postid);
        return view('edit')->with('post',$post);
    }
    public function update(Request $request, $postid){
        $post=Post::findOrFail($postid);
        $post->update($request->all());
        return redirect()->back();
    }
    public function delete($id){
        $post=Post::findOrFail($id);
        $post->delete();
//        return redirect()->back();
    }
    public function user_info(){
        $user=Auth::user();
//        $user->posts;
        return view('user.my_posts')->with('my_info',$user);
    }
    public function approve(Post $post){
//        $post->is_approves=true;
//        $post->save();
//        return redirect()->route('posts.show');

        if ($post->is_approves==false){
            $post->is_approves=true;
            $data=[
                "text"=>'post with id of'.'  '.$post->id.'  '.'has been approved'
            ];

        }else{
            $post->is_approves=false;
            $data=[
                "text"=>'post with id of'.'  '.$post->id.'  '.'has been dis_approved'
            ];
        }
        $post->save();
        $user=User::find(1);
        $user->notify(new PostApprovedNotification($data));
//        return redirect()->back();
    }
}
