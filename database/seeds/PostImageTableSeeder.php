<?php

use App\Post;
use App\PostImage;
use Illuminate\Database\Seeder;

class PostImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostImage::truncate();
        $posts = Post::all();
        foreach ($posts as $key => $value) {
            PostImage::create([
                'image' => "1613602252.jpg",
                'post_id' => $value->id
            ]);
        }
    }
}
