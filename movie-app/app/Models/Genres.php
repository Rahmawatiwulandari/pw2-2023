<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'deskripsi', 'tanggal'];

    
    public function getAllReview()
    {
        return$this->genre;
    }
}