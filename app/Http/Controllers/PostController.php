<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }
    public function index()
    {
    	$posts = Post::latest()->get();
    	return view('posts.index', compact('posts'));
    }

    public function show(Post $post){
    	return view('posts.show', compact('post'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
    	$this->validate(request(), [
    		'title' => 'required',
    		'body' => 'required'
    	]);

    	$post = new Post;

    	$post->title = request('title');
		$post->body = request('body');
        $post->user_id = auth()->id();

		$post->save();

		return redirect('/');
    }
}
