<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }
    public function shows($id)
    {
        $post = Post::findOrFail($id);
        $comments = $post->comments;

        return view('posts.show', compact('post', 'comments'));
    }

    public function storeComment(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $comment = new Comment();
        $comment->post_id = $post->id;
        $comment->name = $request->input('name');
        $comment->email = $request->input('email');
        $comment->content = $request->input('content');
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}
