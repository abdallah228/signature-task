<?php

namespace Database\Seeders;

use App\Models\Writer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WritersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('writers')->delete();
        $writers = [
            [
                'id'=>1,
                'name' => 'Writer  One'
            ],
            [
                'id'=>2,
                'name' => 'Writer Two'
            ],
            [
                'id'=>3,
                'name' => 'Writer Three'
            ]
        ];

        foreach ($writers as $writer) {
            Writer::create($writer);
        }
    }
}
