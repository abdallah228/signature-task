<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(WritersTableSeeder::class); // Register the WritersTableSeeder
        $this->call(BooksTableSeeder::class); // Register the BooksTableSeeder
        $this->call(ArticlesTableSeeder::class); // Register the ArticlesTableSeeder


    }
}
