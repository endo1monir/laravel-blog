<?php
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[PostController::class,'index'])->name('home');

// Route::get('/', function () {
//    // cache()->flush();
  
//    /**    config->storage->logs->laravel.log  */
//    // DB::listen(function ($query){
//   //   logger($query->sql);
//   // });
  
  
//   /* for get the posts with category, you can all queries here but don't make it in the loop in the blade file */
//   // $posts=Post::with('category')->get();
//   // ddd(Post::with('category')->get()->all()[0]->category);
//  //dd(request('search')); 
//  /* 
//   $posts=Post::all();
    
//   if(request('search')){
// $posts=Post::where('title','like','%'.request('search').'%')
// ->orWhere('title','like','%'.request('search').'%')->get();
//   }*/
//   //   $posts= array_map(function($file){

//     //     $docs=YamlFrontMatter::parseFile($file);
// //     return new Post(
// //       $docs->title,
// // $docs->excerpt,
// // $docs->date,
// // $docs->body(),
// // $docs->slug

// //     );
// //   },$files);
// //$posts=Post::latest()->with(['category','author'])->get();
//    // return view('posts',['posts'=>$posts,'categories'=>Category::all()]);

// })->name('home');
Route::get('/posts/{post:slug}',function(Post $post){
// get the post by the slug and pass it to the view

return view('post',['post'=>$post,'categories'=>Category::all()]);
// return view('post',['post'=>Post::find($id)]);


    //     $path= __DIR__ . '/../resources/posts/'.$slug;
//     if(!file_exists($path)){
// //abort(404);
// //ddd('file not exist');  
// return redirect('/');
// }
// $post=cache()->remember("posts.{$slug}",5,function() use($path){
//     var_dump('file_get_contents');
//     return file_get_contents($path); 
// });
//     //$post=file_get_contents( __DIR__ . '/../resources/posts/'.$slug);   
//     return view('post',[
//         'post'=>$post
//     ]);
});//->where('slug','[A-z]+');
//  Route::get('/h',function(){
//      return view('posts ');
//  });

Route::get('categories/{category:slug}',function (Category $category){
// return view('posts',['posts'=>$category->posts->load(['category','author']) ]);
return view('posts',['posts'=>$category->posts,
'categories'=>Category::all(),
'currentCategory'=>$category
]);
});

Route::get('author/{author:username}',function(User $author){
   // $posts=$author::with(['author','category'])->posts;

  // ddd($author->posts()->with(['author','category'])->get());

//  return view('posts',['posts'=>$author->posts()->with(['author','category'])->get()]);
//return view('posts',['posts'=>$author->posts->load(['category','author'])]);
return view('posts',['posts'=>$author->posts,'categories'=>Category::all()]);
});
