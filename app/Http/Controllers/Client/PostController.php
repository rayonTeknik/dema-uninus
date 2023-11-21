<?php

namespace App\Http\Controllers\frontend;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {

      // get data post berdarkan waktu terdahulu 
      // =======================
      $posts = Post::all();

      // get data post berdarkan waktu terbaru dibuat 
      // =======================
      $posts = Post::latest()->get();
      
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

      dd($postsWithTags);
    }
}
