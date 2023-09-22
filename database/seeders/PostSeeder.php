<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post1 = new Post();
        $post1->user_id = 1;
        $post1->category_id = 1;
        $post1->title = 'titulo post 1';
        $post1->content = 'Content post 1';
        $post1->image = '';
        
        $post1->save();


        $post2 = new Post();
        $post2->user_id = 1;
        $post2->category_id = 2;
        $post2->title = 'titulo post 2';
        $post2->content = 'Content post 2';
        $post2->image = '';
        
        $post2->save();


    }
}
