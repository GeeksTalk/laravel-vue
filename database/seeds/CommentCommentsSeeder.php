<?php

use App\Comment;
use App\User;
use Illuminate\Database\Seeder;

class CommentCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = Comment::all();
        
        $comments->map(function($comment) {
            $comment->children()->createMany(factory(Comment::class, 2)->raw([
                'user_id' => User::inRandomOrder()->first()->id,
            ]));
        });
    }
}
