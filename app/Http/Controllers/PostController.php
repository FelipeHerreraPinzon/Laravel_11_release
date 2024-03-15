<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function getPosts(){
        $posts = Post::all();
        $response["posts"] = $posts;
        $response["success"] = 1;
    
        return response()->json($response);
    }


    public function createPost(Request $request){
        $post = Post::create($request->all());
        return response()->json($product);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function updatePost(Request $request, $id){
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->userId = $request->input('userId');
        $post->save();
    
        $response["posts"] = $post;
        $response["success"] = 1;
    
        return response()->json($response);
    }

    /**
     * Display the specified resource.
     */
    public function getPostById($id) {
        $post = Post::find($id);
    
        if (!$post) {
            return response()->json(['error' => 'Post no encontrado'], 404);
        }
    
        return response()->json($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
   

    /**
     * Remove the specified resource from storage.
     */
    public function deletePost($id){
        $post = Post::findOrFail($id);
        $post->delete();
    
        return response()->json('Post removed successfully.');
    }
}
