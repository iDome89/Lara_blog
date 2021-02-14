<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
                 return [
                     'user_id' => (4),
                     'post_title' => $this->faker->title,
                     'category_id' => rand(2,8),
                     'post_content' =>$this-> faker->paragraph
                 ];
    }
}
