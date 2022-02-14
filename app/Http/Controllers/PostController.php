<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index(){
  return view('posts',['posts'=>$this->getPosts(),'categories'=>Category::all()]);
    }

public function show(Post $post){
return view('post',['post'=>$post,'categories'=>Category::all()]);
}
protected function getPosts(){
   $posts=Post::filter(request(['search','category']))->get();

//   if(request('search')){
// $posts=Post::where('title','like','%'.request('search').'%')
// ->orWhere('title','like','%'.request('search').'%')->get();
//   }
  return $posts;
}
}
