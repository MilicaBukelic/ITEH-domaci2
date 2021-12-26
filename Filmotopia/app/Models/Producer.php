<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'reziser',
        'radnja',
        'pocetakProjekcije'
    ];
}