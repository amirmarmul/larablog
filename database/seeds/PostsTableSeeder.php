<?php

use App\Post;
use App\Tag;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Post::class, 25)->create()->each(function ($post) {
            $post->tags()->attach(factory(Tag::class, 2)->create());
        });
    }
}
