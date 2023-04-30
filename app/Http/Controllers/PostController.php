<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return response()->json([
            'posts' => Post::get()->each(function($item){
                $post = $item;
                $post['date'] = Carbon::parse($post->created_at)->format('H:i:s');
                unset($post->created_at, $post->updated_at);
            })
        ]);
    }
    public function store(Request $request)
    {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return response()->json([
            'message' => 'Post Created',
            'status' => 'success',
            'data' => $post
        ]);
    }
    public function show(Post $post)
    {
        return response()->json(['post' => $post]);
    }
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return response()->json([
            'message' => 'Post Updated',
            'status' => 'success',
            'data' => $post
        ]);
    }
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json([
            'message' => 'Post deleted',
            'status' => 'success'
        ]);
    }
}
