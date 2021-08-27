<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
namespace Database\Factories;
use App\Models\Tag;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    protected $model = Tag::class;

    public function definition()
    {
            
                return [
                    'nomTag' => $this->faker->sentence,
                ];
            
    }
}