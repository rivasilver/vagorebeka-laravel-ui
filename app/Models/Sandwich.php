<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sandwich extends Model
{
    use HasFactory;

    protected $visible = [
        'id',
        'name',
        'number_of_toppings',
        'toppings',
        'vegetarian',
        'created_at'
    ];

    protected $fillable = [
        'name',
        'number_of_toppings',
        'toppings',
        'vegetarian',
    ];
}
