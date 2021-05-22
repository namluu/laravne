<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $user = \App\Models\User::factory()->create();
            $category = \App\Models\Category::factory()->create();
            $posts = \App\Models\Post::factory()
                        ->count(3)
                        ->for($user)
                        ->for($category)
                        ->create();
        }
    }
}
