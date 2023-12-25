<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2, 8)),  //judul
            'slug' => $this->faker->slug(), 
            'excerpt' => $this->faker->paragraph(), 
            'body' => collect($this->faker->paragraphs(mt_rand(50, 100)))
                        ->map(fn ($p) => "<p>$p</p>")
                        ->implode(''),                    // isi buku
            'user_id' => mt_rand(1, 3),                  // id user
            'category_id' => mt_rand(1, 2),             // category
            'author' => $this->faker->name(),           // Penulis
            'publisher' => $this->faker->company(),     // Penerbit
            'publication_year' => $this->faker->year(), // Tahun Terbit
            'page_count' => mt_rand(100, 500),            // Jumlah Halaman
            'sinopsis' => $this->faker->paragraph()      // Sinopsis
        ];
    }
    
}