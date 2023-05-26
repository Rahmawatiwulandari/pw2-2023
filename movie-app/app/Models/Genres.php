<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;
    protected $genres = [
        [
            'no' => 1,
            'nama genre' => 'Drama',
            'deskripsi' => 'Film Tentang keluarga',
        ],
        [
            'no' => 2,
            'nama genre' => 'Action',
            'deskripsi' => 'Film sepak bola',
        ],
        [
            'no' => 3,
            'nama genre' => 'Crime',
            'deskripsi' => 'Film tentang edukasi',
        ],
        [
            'no' => 4,
            'nama genre' => 'Horor',
            'deskripsi' => 'Susana 1000 sate',
        ],
        [
            'no' => 5,
            'nama genre' => 'Anime',
            'deskripsi' => 'doraemon',
        ],
        
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}
