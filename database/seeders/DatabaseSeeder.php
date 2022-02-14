<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use \App\Models\User;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

      $user=User::factory()->create(['name'=>'endo monir']);
    Post::factory(5)->create(['user_id'=>$user->id]);
    Post::factory()->create();
//     $user=User::factory()->create();
    
// $personal=Category::create([
//         'name'=>'personal',
//         'slug'=>'personal'
//     ]);
    
//     $family=Category::create([
//         'name'=>'Family',
//         'slug'=>'family'
//     ]);
    
//     $work=Category::create([
//         'name'=>'Work',
//         'slug'=>'work'
//     ]);

// Post::create([
//         'user_id'=>$user->id,
//         'category_id'=>$personal->id,
//         'slug'=>'first-post',
//         'title'=>'title',
//         'excerpt'=>'excerpt',
//         'body'=>'body'
// ]);
// Post::create([
//     'user_id'=>$user->id,
//     'category_id'=>$work->id,
//     'slug'=>'second-post',
//     'title'=>'title',
//     'excerpt'=>'excerpt',
//     'body'=>'body'
// ]);
// Post::create([
//     'user_id'=>$user->id,
//     'category_id'=>$family->id,
//     'slug'=>'third-post',
//     'title'=>'title',
//     'excerpt'=>'excerpt',
//     'body'=>'body'
// ]);
    
        }
}
