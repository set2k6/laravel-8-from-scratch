<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use GrahamCampbell\ResultType\Error;
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
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        $family = category::create([
            'name'=> 'Family',
            'slug'=> 'family'
        ]);

        $work = category::create([
            'name'=> 'Work',
            'slug'=> 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem Ipsum daosigan sfnasf',
            'body' => '<p>jasdf sdfpasuf spd fapsdfhsviuan ufwnf auena fsu dgha ghasdug agh ap gpa ghapsdguhasdg ahsiguhasighda</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem Ipsum daosigan sfnasf',
            'body' => '<p>jasdf sdfpasuf spd fapsdfhsviuan ufwnf auena fsu dgha ghasdug agh ap gpa ghapsdguhasdg ahsiguhasighda</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem Ipsum daosigan sfnasf',
            'body' => '<p>jasdf sdfpasuf spd fapsdfhsviuan ufwnf auena fsu dgha ghasdug agh ap gpa ghapsdguhasdg ahsiguhasighda</p>'
        ]);
    }
}
