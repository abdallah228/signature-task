<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Article::truncate();
        $articles_data = [
            [
                'name' => 'Article One',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sed lorem sit amet est pharetra vulputate non id libero.',
            ],
            [
                'name' => 'Article Two',
                'content' => 'Sed vehicula vehicula ipsum, id ultrices neque lacinia id. In hac habitasse platea dictumst.',
            ],
            [
                'name' => 'Article Three',
                'content' => 'Pellentesque sodales diam eget ligula vehicula, id lacinia mi tincidunt. Ut auctor justo a urna consectetur, sit amet dignissim velit convallis.',
            ],
        ];

        foreach ($articles_data as $article) {
            // Calculate word_count dynamically
            $word_count = str_word_count($article['content']);
            // Create article with dynamically calculated word_count
            Article::create([
                'name' => $article['name'],
                'content'=>$article['content'],
                'word_count' => $word_count,
                'status' => 1,
            ]);
        }
    }
}
