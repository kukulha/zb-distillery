<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
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
        $key =  "posts" ;

        $posts = Cache::remember($key, now()->addMinutes(10), function(){
            return Post::with(['user'])->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(3);
        });
    	return view('index', compact('posts'));
    }
    
    public function zb()
    {
    	return view('web.zb');
    }

    public function blog()
    {
        $key =  "posts.blog." . request('page', 1);

        $posts = Cache::remember($key, now()->addMinutes(10), function(){
            return Post::with(['user'])->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(12);
        });

    	return view('web.posts', compact('posts'));
    }

    public function post($slug)
    {   
        $post = Cache::remember("blog.{$slug}", now()->addMinutes(10), function() use($slug){
            return Post::where('slug', $slug)->first();
        } );
    	$related= Post::inRandomOrder()
            ->where('category_id', $post->category->id)
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
