<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller {

   public function index() {
      $posts = Post::all();
      return view("blog.index", compact('posts'));
   }

   public function show($id) {
      $blog = Post::find($id);
      if (!$blog) abort(404);
      return view("blog.detail")->with("blog", $blog);
   }

}
