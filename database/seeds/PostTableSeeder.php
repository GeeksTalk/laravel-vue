<?php

use App\Comment;
use App\Post;
use App\User;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 10)->create()->each(function($post) {
            $post->comments()->createMany(factory(Comment::class, 4)->raw([
                'user_id' => User::inRandomOrder()->first()->id,
                ]));
        });
    }
}
