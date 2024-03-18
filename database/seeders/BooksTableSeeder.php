<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // Book::truncate();
        DB::table('books')->delete();
        $books = [
            [
                'id'=>1,
                'title' => 'Book  One',
                'writer_id'=>1,
            ],
            [
                'id'=>2,
                'title' => 'Book Two',
                'writer_id'=>1,

            ],
            [
                'id'=>3,
                'title' => 'Book Three',
                'writer_id'=>2,

            ],
            [
                'id'=>4,
                'title' => 'Book Four',
                'writer_id'=>3,

            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }

}
