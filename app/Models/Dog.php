<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'nev',
        'fajta',
        'fajtatiszta',
        'kor',
        'created_at'
    ];

    protected $fillable = [
        'nev',
        'fajta',
        'fajtatiszta',
        'kor'
    ];
}
