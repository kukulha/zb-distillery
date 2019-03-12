<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PagesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'admin']);
    }

	public function disclaimer()
	{
		return view('disclaimer');
	}

    public function index()
    {
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
    	return view('index', compact('posts'));
    }
    public function zb()
    {
    	return view('web.zb');
    }
    public function blog()
    {
    	$posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(12);
    	return view('web.posts', compact('posts'));
    }
    public function post($slug)
    {
    	$post = Post::where('slug', $slug)->first();
    	$related= Post::where('category_id', $post->category->id)
            ->where('id', '!=', $post->id)
            ->paginate(3);
    	return view('web.post', compact('post', 'related'));
    }
    public function admin()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(5);
        return view('admin.index');
    }

}
