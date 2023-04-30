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
            'posts' => Post::get()->each(function ($item) {
                $post = $item;
                $post['date'] = Carbon::parse($post->created_at)->format('H:i:s');
            })
        ]);
    }
    public function store(Request $request)
    {
        $file = $request->file('file');
        $imageName = time() . '.' . $file->extension();
        $imagePath = public_path() . '/images';
        $image = 'images/' . $imageName;

        $file->move($imagePath, $imageName);

        $post = new Post;
        $post->image = $image;
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
        if ($request->file('file')) {
            unlink($post->image);
            $file = $request->file('file');
            $imageName = time() . '.' . $file->extension();
            $imagePath = public_path() . '/images';
            $image = 'images/' . $imageName;

            $file->move($imagePath, $imageName);

            $post->image = $image;
            $post->title = $request->title;
            $post->description = $request->description;
            $post->save();
            return response()->json([
                'message' => 'Post Created',
                'status' => 'success',
                'data' => $post
            ]);
        } else {
            $post->title = $request->title;
            $post->description = $request->description;
            $post->save();
            return response()->json([
                'message' => 'Post Updated',
                'status' => 'success',
                'data' => $post
            ]);
        }
    }
    public function destroy(Post $post)
    {
        $post->delete();
        unlink($post->image);
        return response()->json([
            'message' => 'Post deleted',
            'status' => 'success'
        ]);
    }
}
