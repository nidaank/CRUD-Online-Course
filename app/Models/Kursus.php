<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'durasi'];

    public function materi()
    {
        return $this->hasMany(Materi::class);
    }
}

