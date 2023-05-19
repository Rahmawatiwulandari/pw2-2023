<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Shawshank Redemption',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'USA',
            'tahun' => 1994,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'parasite',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'indonesia',
            'tahun' => 1999,
            'rating' => 8.9,
        ],
        [
            'no' => 3,
            'judul' => 'azab',
            'poster' => 'image.png',
            'genre' => 'drama',
            'negara' => 'malaysia',
            'tahun' => 2000,
            'rating' => 7.9,
        ],
        [
            'no' => 4,
            'judul' => 'CLBK',
            'poster' => 'image.png',
            'genre' => 'Turki',
            'negara' => 'thailand',
            'tahun' => 1985,
            'rating' => 9.9,
        ],
        [
            'no' => 5,
            'judul' => 'of the blue sea',
            'poster' => 'image.png',
            'genre' => 'Drama',
            'negara' => 'Korea selatan',
            'tahun' => 2023,
            'rating' => 3.9,
        ],
    ];

    public function getAllMovies()
    {
        return $this ->movies;
    }

   
}
