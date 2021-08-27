<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
namespace Database\Factories;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class PostFactory extends Factory
{

    protected $model = Post::class;

    public function definition()
    {
         
         return [
            'Contenu' => $this->faker-> paragraph(1),
         ];
    }
}