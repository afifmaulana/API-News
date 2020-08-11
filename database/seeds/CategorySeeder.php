<?php

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
        \App\Category::create([
           'category' => 'Education'
        ]);
        \App\Category::create([
            'category' => 'Sport'
        ]);
        \App\Category::create([
            'category' => 'Criminal'
        ]);
        \App\Category::create([
            'category' => 'Technology'
        ]);
        \App\Category::create([
            'category' => 'Economy'
        ]);
        \App\Category::create([
            'category' => 'Business'
        ]);
    }
}
