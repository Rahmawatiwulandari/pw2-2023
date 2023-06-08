<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genres::create([
            'nama'=> 'Action',
            'deskripsi'=> 'Action-packed movies',
        ]);

        Genres::create([
            'nama'=> 'Drama',
            'deskripsi'=> 'Film tenteang keluarga',
        ]);
        
        Genres::create([
            'nama'=> 'cinemore',
            'deskripsi'=> 'Film tentang edukasi',
        ]);
        
        Genres::create([
            'nama'=> 'Horor',
            'deskripsi'=> 'Susana 1000 sate',
        ]);
        
        Genres::create([
            'nama'=> 'Anime',
            'deskripsi'=> 'Doraemon',
        ]);
    }
}
