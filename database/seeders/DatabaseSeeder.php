<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name'=>'John Doe'
        ]);

        Post::factory(5)->create([
            'user_id'=>$user->id
        ]);
//        User::query()->truncate();
//        Category::query()->truncate();
//        Post::query()->truncate();
//
//     $user =    \App\Models\User::factory()->create();
//
//       $personal =  Category::create([
//            'name'=>'Personal',
//            'slug'=>'personal'
//        ]);
//
//       $family = Category::create([
//            'name'=>'Family',
//            'slug'=>'family'
//        ]);
//
//       $work = Category::create([
//            'name'=>'Work',
//            'slug'=>'work'
//        ]);
//
//       Post::create([
//           'user_id'=>$user->id,
//           'category_id'=>$family->id,
//           'title'=> 'My Family Post',
//           'slug'=> 'my-first-post',
//           'excerpt'=> '<p>lerom ipsum dolar sit amet</p>',
//           'body'=>'<p> lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet</p>'
//       ]);
//
//        Post::create([
//            'user_id'=>$user->id,
//            'category_id'=>$work->id,
//            'title'=> 'My Work Post',
//            'slug'=> 'my-work-post',
//            'excerpt'=> '<p>lerom ipsum dolar sit amet</p>',
//            'body'=>'<p> lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet lerom ipsum dolar sit amet</p>'
//        ]);
//

    }
}
