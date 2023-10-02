<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        /*DB::table('users')->insert([
            ['name' => 'Eddy Lujan', 'surname' => 'lujandev', 'nick' => 'lujandev', 'role' => 'ROLE_USER', 'description' => 'null', 'image' => 'null', 'email' => 'eddylujann@gmail.com',
            'password' => bcrypt('secret')],
            ['name' => 'Jordan Lujan', 'surname' => 'jor', 'nick' => 'jor', 'role' => 'ROLE_USER', 'description' => 'null', 'image' => 'null', 'email' => 'jordan@gmail.com',
            'password' => bcrypt('secret')]
        ]);*/

        $users = [
            ['name' => 'Eddy Lujan', 'surname' => 'lujandev', 'nick' => 'lujandev', 'role' => 'ROLE_USER', 'description' => 'null', 'image' => 'null', 'email' => 'eddylujann@gmail.com',
            'password' => bcrypt('secret')],
            ['name' => 'Jordan Lujan', 'surname' => 'jor', 'nick' => 'jor', 'role' => 'ROLE_USER', 'description' => 'null', 'image' => 'null', 'email' => 'jordan@gmail.com',
            'password' => bcrypt('secret')]
        ];

        User::insert($users);
    }
}
