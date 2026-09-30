<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisLayananTes extends Model
{
    use HasFactory;

    // fillable colummns
    protected $fillable = [
        'id',
        'nama',
        'harga',
    ];
}
