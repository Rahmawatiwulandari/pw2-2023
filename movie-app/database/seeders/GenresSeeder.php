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
            'nama'=> 'Action',
            'deskripsi'=> 'Action-packed movies',
        ]);
        
        Genres::create([
            'nama'=> 'Action',
            'deskripsi'=> 'Action-packed movies',
        ]);
    }
}
