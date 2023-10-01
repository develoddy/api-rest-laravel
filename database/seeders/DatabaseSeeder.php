<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use \App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /*User::factory(5)->create();
        Category::factory(2)->create();
        $this->call([ PostSeeder::class]);*/

        /*\App\Models\Post::factory()->create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Test User title',
            'content' => 'Content user',
            'image' => '',
        ]);*/

        // \App\Models\User::factory(5)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([ UserSeeder::class]);
        //User::factory(10)->create();

    }
}
