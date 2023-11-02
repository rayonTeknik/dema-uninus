<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tag;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
      /**
   * Display a listing of the resource.
   */
  public function index()
  {
      $post =Post::latest()->get();

      // dd($post);
      return view("admin.post.index", compact("post"));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    $tag = Tag::latest()->get();
    $categories = Category::all();
      return view("admin.post.create", compact("categories", "tag"));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
      $newFileName = ''; // Initialize the filename variable

      if ($request->hasFile('img')) {
          $image = $request->file('img');
          $newFileName = 'Blog_' . $request->title . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

          // Resize and save the image
          $compressedImage = Image::make($image)->resize(1500, null, function ($constraint) {
              $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));
      }

      // Ensure the "status" field is cast to an integer
      $postData = array_merge($request->except('tags'), ['img' => $newFileName, 'status' => (int) $request->status]);

      $post = Post::create($postData);

      // Save the post first, then attach the tags
      $post->save();
      $post->tags()->sync($request->tags);

      return redirect()->route('index.post');
  }

    

  /**
   * Show the form for editing the specified resource.
   */
  public function edit($id, Request $request, Post $post)
  {
      $post =Post::find($id);
      $post = Post::with('category', 'tag');
      return view('admin.post.edit', compact('post'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, $id)
  {
      // Find the post by its ID
      $post = Post::find($id);
  
      if (!$post) {
          return "error cuy";
      }
  
      // Update the post with the request data
      $post->update($request->all());
  
      if ($request->hasFile('img')) {
          $image = $request->file('img');
          $newFileName = 'Blog_' . $request->title . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
  
          // Resize and save the image
          $compressedImage = Image::make($image)->resize(1500, null, function ($constraint) {
              $constraint->aspectRatio();
          })->save(public_path('img/' . $newFileName));
  
          $post->img = $newFileName;
      }
  
      $post->save();
  
      return redirect()->route('index.post');
  }
  

  /**
   * Remove the specified resource from storage.
   */
  public function destroy($id, Post $post)
  {
    $post = Post::findOrFail($id);
    $post->delete();
    return redirect()->route('index.post');
  }
}
