<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'name',
        'color',
        'purebred',
        'age',
        'created_at'
    ];

    protected $fillable = [
        'name',
        'color',
        'purebred',
        'age'
    ];
}
