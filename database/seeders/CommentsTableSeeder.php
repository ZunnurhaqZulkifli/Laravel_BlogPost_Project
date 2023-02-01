<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\BlogPost;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = App\BlogPost::all();

        if($posts->count() === 0) {
            $this->command->info('There Are 0 Blog Post, So No Comments Will Be Added!');
            return;
        }
        
        $commentsCount = (int)$this->command->ask('How Many Comments Would You Like ?', 150);

        factory(App\Comment::class, $commentsCount)->make()->each(function($comment) use ($posts) {
            $comment->blog_post_id = $posts->random()->id;
            $comment->save();
        });
    }
}
