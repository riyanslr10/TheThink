<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=> 'admin',
            'username'=> 'admin',
            'email'=> 'admin@gmail.com',
            'password'=> bcrypt('12345'),
        ]);
        
        User::factory(3)->create();

        Category::create([
            'name' => 'Foods and Drinks',
            'slug' => 'foods-and-drinks'
        ]);

        Category::create([
            'name' => 'Education',
            'slug' => 'education'
        ]);

        Category::create([
            'name' => 'Novel',
            'slug' => 'novel'
        ]);

        Category::create([
            'name' => 'Children',
            'slug' => 'children'
        ]);

        Post::factory(20)->create();

    }
}
