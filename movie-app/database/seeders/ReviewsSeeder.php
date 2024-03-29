<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'movie'=> 'The legends of The Blue Sea',
            'user'=> 'Wulan',
            'rating'=> 8.5,
            'comment'=> 'Filmnya Bagus',
            'tanggal' => 23-06-2006,
        ]);

        Review::create([
            'movie'=> 'The master',
            'user'=> 'amar',
            'rating'=> 9.8,
            'comment'=> 'menyenangkan',
            'tanggal' => 12-012-2006,
        ]);

        Review::create([
            'movie'=> 'disney',
            'user'=> 'nining',
            'rating'=> 9.5,
            'comment'=> 'Filmnya bagus dan memuaskan',
            'tanggal' => 13-7-2020,
        ]);

        Review::create([
            'movie'=> 'azab indosiar',
            'user'=> 'rahma',
            'rating'=> 9.5,
            'comment'=> 'Filmnya terbawa perasaan',
            'tanggal' => 20-06-2023,
        ]);

        Review::create([
            'movie'=> 'enchend',
            'user'=> 'karimah',
            'rating'=> 7,
            'comment'=> 'Filmnya kurang sedih',
            'tanggal' => 21-07-1999,
        ]);
    }
}
