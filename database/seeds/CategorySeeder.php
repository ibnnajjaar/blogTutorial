<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Laravel',
                'slug' => 'laravel'
            ],
            [
                'name' => 'Blade',
                'slug' => 'blade'
            ],
            [
                'name' => 'SCSS',
                'slug' => 'scss'
            ]
        ];

        foreach ($categories as $category) {
            $new_category = new Category();
            $new_category->name = $category['name'];
            $new_category->slug = $category['slug'];
            $new_category->save();
        }
    }
}
