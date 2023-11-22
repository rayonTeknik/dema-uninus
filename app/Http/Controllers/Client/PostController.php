<?php

namespace App\Http\Controllers\Client;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {

      // get data post berdarkan waktu terdahulu 
      // =======================
      $posts = Post::all();

      // get data post berdarkan waktu terbaru dibuat 
      // =======================
      $postLatest = Post::where('status', 1)->latest()->get();
      
      // get data post dengan category 
      // =======================
      $posts = Post::with('category')->get();

      // get data post berdasarkan tag 
      // =======================
      $tag = Tag::find(2);
      $postWithTags = $tag->posts;

      // get data post dengan tagnya 
      // =======================
      $postsWithTags = Post::with('tags')->get();

      // dd($postsWithTags);

      return view('clients.blog', compact('posts', 'postLatest'));
    }

    // public function show($slug)
    // {
    //     $post = Post::where('slug', $slug)
    //         ->with('category', 'comments', 'user')
    //         ->where('status', 1)
    //         ->orderBy('created_at', 'desc')
    //         ->firstOrFail();
    //     $post_categories = Category::with('posts')
    //         ->whereHas('posts', function ($query) {
    //             $query->where('status', 1);
    //         })
    //         ->orderBy('title')
    //         ->latest()
    //         ->get();
    //     $trending = Post::with('category', 'user')
    //         ->where('status', '1')
    //         ->orderBy('views', 'desc')
    //         ->paginate(15);
    //     $tags = Tag::with('posts')
    //         ->whereHas('posts', function ($query) {
    //             $query->where('status', 1);
    //         })
    //         ->orderBy('title')
    //         ->latest()
    //         ->get();

    //     ++$post->views;
    //     $post->update();
    //     return view("client.siggleBlog", compact('post', 'post_categories', 'tags', 'user', 'trending'));
    // }

    public function show($slug){
      $post = Post::where('slug', $slug)
    // ->with('category', 'comments', 'user')
    ->where('status', 1)
    ->with('comments', 'user')
    ->orderBy('created_at', 'desc')
    ->firstOrFail();


      // dd($post);
      return view('clients.siggleBlog', compact('post'));
    }
}
