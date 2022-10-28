<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Article;
use App\Models\User;
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

        // User::factory()->create();

        // Belongs To Relationships
        Article::factory()
            ->count(5)
            ->forAuthor([
                'name' => 'developermithu',
                'email' => 'developermithu@gmail.com',
                'password' => bcrypt('developermithu'),
                'email_verified_at' => now(),
                'isAdmin' => true,
            ])
            ->create();

        // Has Many Relationships
        User::factory()
            ->has(Article::factory()->count(3))
            ->count(10)
            ->create();

        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
    }
}
