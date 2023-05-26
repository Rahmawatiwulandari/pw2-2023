<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $review =[
        [
            'no' => 1,
            'movie' => 'The legend of the blue sea',
            'user' => 'wulan',
            'rating' => 8.5,
            'comment' => 'terharu',
        ],
        [
            'no' => 2,
            'movie' => 'The master',
            'user' => 'amar',
            'rating' => 10.0,
            'comment' => 'menyenangkan ',
        ],
        [
            'no' => 3,
            'movie' => 'enchend',
            'user' => 'karimah',
            'rating' => 7.0,
            'comment' => 'Ceritanya kurang sedih',
        ],
        [
            'no' => 4,
            'movie' => 'Disney',
            'user' => 'nining',
            'rating' => 9.5,
            'comment' => 'filmnya bagus dan memuaskan',
        ],
        [
            'no' => 5,
            'movie' => 'Azab indosiar',
            'user' => 'rahma',
            'rating' => 9.7,
            'comment' => 'Terbawa Perasaan',
        ],
    ];

    public function getAllReview()
    {
        return$this->review;
    }
}
