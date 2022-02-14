<?php
namespace App\Models;

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;
class Post{
public $title;
public $excerpt;
public $date;
public $body;
public $slug;
function __construct($title,$excerpt,$date,$body,$slug)
{
    $this->title=$title;
    $this->excerpt=$excerpt;
    $this->date=$date;
    $this->body=$body;
    $this->slug=$slug;
}
public static function all(){
//collection\
return cache()->rememberForever('posts.all', function () {
    return collect(File::files(resource_path('posts/')))
    ->map(function($file){
      return YamlFrontMatter::parseFile($file); 
    })
    ->map(function($docs){
      return new Post(
        $docs->title,
  $docs->excerpt,
  $docs->date,
  $docs->body(),
  $docs->slug
  
      );
    })->sortBy('date');
      
});

//array map
    //     $files=File::files(resource_path('posts/'));
//    return array_map(function($file){
//         return $file->getContents();
//     },$files);
}

    public static function find($slug){
//dd(static::all()->firstWhere('slug',$slug));
return static::all()->firstWhere('slug',$slug);
        //     if(!file_exists($path=resource_path("/posts/{$slug}.html"))){
// return redirect('/');
//     }
//     return cache()->remember("posts.{$slug}",10,function() use($path){
//         return file_get_contents($path);
//     });
    }
}