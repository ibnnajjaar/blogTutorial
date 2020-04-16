<?php

use App\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
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
            ],
            [
                'name' => 'CSS',
                'slug' => 'css'
            ],
            [
                'name' => 'CSS3',
                'slug' => 'css3'
            ],
            [
                'name' => 'HTML',
                'slug' => 'html'
            ],
            [
                'name' => 'HTML5',
                'slug' => 'html5'
            ],
            [
                'name' => 'PHP',
                'slug' => 'php'
            ],
            [
                'name' => 'PHP7',
                'slug' => 'php7'
            ],
            [
                'name' => 'Framework',
                'slug' => 'framework'
            ],
            [
                'name' => 'Refactoring',
                'slug' => 'refactor'
            ],
            [
                'name' => 'JavaScript',
                'slug' => 'javascript'
            ],
            [
                'name' => 'Bootstrap',
                'slug' => 'bootstrap'
            ]
        ];

        foreach ($tags as $tag) {
            $new_tag = new Tag();
            $new_tag->name = $tag['name'];
            $new_tag->slug = $tag['slug'];
            $new_tag->save();
        }
    }
}
