<?php

use App\Post;
use App\Category;
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
        Post::truncate();
        $categories = Category::all();
        foreach ($categories as $key => $value) {
            for($i=0; $i<=20; $i++){
                Post::create([
                    'title' => "Categoría $i $key",
                    'url_clean' => "categoria-$i-$key",
                    'content' => "Texto",
                    'posted' => 'yes',
                    'category_id' => $value->id
                ]);
            }
        }
    }
}
