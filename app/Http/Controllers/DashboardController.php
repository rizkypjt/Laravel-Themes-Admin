<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;

class DashboardController extends Controller{

   public function __construct() {
      $this->middleware('auth');
   }

   public function index() {
      $posts = Post::all();
      return view("posts.list", compact('posts'));
   }

   public function delete($id) {
      $user = Post::find($id);
      $user->delete();
      return view('posts.list');
   }

   static public function slugify($text){
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
      $text = preg_replace('~[^-\w]+~', '', $text);
      $text = trim($text, '-');
      $text = preg_replace('~-+~', '-', $text);
      $text = strtolower($text);
      if (empty($text)) return 'n-a';
      return $text;
   }

   public function store(Request $request) {
      $blog = new Post;
      $blog->author_id = Auth::id();
      $blog->title = $request->title;
      $blog->content = $request->content;

      $blog->slug = DashboardController::slugify($request->title);
      $blog->excerpt = $request->content;

      $blog->img = "home-bg.png";
      $blog->created_at = date('Y-m-d H:i:s');
      $blog->updated_at = date('Y-m-d H:i:s');

      $blog->save();
      return view("posts.list");
   }
}
