<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'description',
        'genre',
        'published_year',
        'isbn',
        'pages',
        'language',
        'publisher',
        'price',
        'cover_image',
        'is_available'
    ];

    // Optional: type casting (recommended)
    protected $casts = [
        'is_available' => 'boolean',
        'published_year' => 'integer',
        'pages' => 'integer',
        'price' => 'decimal:2',
    ];
}