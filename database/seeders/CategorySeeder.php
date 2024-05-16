<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert(['name'=> 'Test']);
//        DB::table('categories')->insert([
//            ['name' => 'Laravel', 'slug' => 'laravel'],
//            ['name' => 'Vuejs', 'slug' => 'vuejs'],
//            ['name' => 'PHP', 'slug' => 'php'],
//            ['name' => 'Javascript', 'slug' => 'javascript'],
//            ['name' => 'Python', 'slug' => 'python'],
//            ['name' => 'Java', 'slug' => 'java'],
//            ['name' => 'React', 'slug' => 'react'],
//            ['name' => 'Angular', 'slug' => 'angular'],
//        ]);
    }
}
