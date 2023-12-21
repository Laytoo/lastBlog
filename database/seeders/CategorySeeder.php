<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

       Category::factory()->count(5)->create();

            // $categories = ['Sport', 'News', 'Science', 'Web Development', 'UI/UX'];

            // for($i = 0; $i < 5; $i++) {
            //     Category::factory()->create([
            //         'name' => $categories[$i],
            //         'slug' => Str::slug($categories[$i]),
            //         'created_at' => fake()->dateTime,
            //     ]);
            // }
    }

}
