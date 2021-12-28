<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\PostCategory;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(10)->create()->each(function($post){
            PostCategory::factory()->count(2)->create([
                'post_id' => $post->id
            ]);
        });
    }
}