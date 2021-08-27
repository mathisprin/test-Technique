<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::factory()
            ->count(5)
            ->hasPosts(3)
            ->create();
    }
}
