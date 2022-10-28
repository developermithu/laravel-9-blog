<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['web design', 'web development', 'digital marketing', 'tutorial'];

        foreach ($categories as $category) {
            $cat =  Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
            ]);
        }
    }
}
