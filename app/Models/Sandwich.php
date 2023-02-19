<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sandwich extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'nev',
        'kenyertipus',
        'feltetek_szama',
        'feltetek',
        'vegetarianus',
        'created_at'
    ];

    protected $fillable = [
        'nev',
        'kenyertipus',
        'feltetek_szama',
        'feltetek',
        'vegetarianus'
    ];
}
