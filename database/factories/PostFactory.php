<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title    = $this->faker->realText(60);
        $keywords = ['keyword_1', 'keyword_2', 'keyword_3'];
        return [
            'title'            => $title,
            'description'      => $this->faker->realText(150),
            'body'             => $this->faker->realText(300),
            'cover'            => 'default.png',
            'meta_description' => $title,
            'meta_keywords'    => $this->faker->realText(30),
            'slug'             => \Str::slug($title),
        ];
    }
}