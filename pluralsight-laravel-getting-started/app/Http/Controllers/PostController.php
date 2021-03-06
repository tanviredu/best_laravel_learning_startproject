<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PostController extends Controller
{
    
    // getting all the list of post
    // in the admin panel
    public function getAdminIndex()
    {
        $post = new Post();
        $posts = Post::all();
        return view('admin.index', ['posts' => $posts]);
    }


    // admin form for posting

    public function getAdminCreate()
    {
        return view('admin.create');
    }

    // this function will show the index file
    public function getIndex(){
        $posts = Post::all();
        return view('blog.index',['posts'=>$posts]);
    }



    // Admin Post Controller
    public function postAdminCreate(Request $request){

        // first validate
        $this->validate($request,[
            'title'=>'required|min:5',
            'content'=>'required|min:10'
        ]);
        // create the post

        $post = new Post([
            // fill it
            'title'=>$request->input('title'),
            'content'=>$request->input('content')
        ]);
        $post->save();

        return redirect()->route('admin.index')->with('info','Post Created ,Title is '. $request->input('title'));
    }

    public function getAdminEdit($id){
        // editing function will be here
        $post = Post::find($id);
        return view('admin.edit', ['post' => $post, 'postId' => $id]);
    }



    public function postAdminUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);

        // first find the post with  the id
        $post = Post::find($request->input('id'));

        // get the post now update the value
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();
       
        return redirect()->route('admin.index')->with('info', 'Post edited, new Title is: ' . $request->input('title'));
    }



        // getting a single post
    public function getPost($id)
    {   
        // find uses the find
        $post = Post::find($id); 
        return view('blog.post', ['post' => $post]);
    }

    public function getAdminDelete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.index')->with('info', 'Post Deleted, new Title is: ');

    }

}
