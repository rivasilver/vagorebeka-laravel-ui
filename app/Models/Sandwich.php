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
        'bread_type',
        'number_of_toppings',
        'toppings',
        'vegetarian',
        'created_at'
    ];

    protected $fillable = [
        'name',
        'bread_type',
        'number_of_toppings',
        'toppings',
        'vegetarian',
    ];
}
