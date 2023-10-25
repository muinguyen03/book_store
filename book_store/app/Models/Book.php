<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = 'mongodb';

    protected $fillable = [
        'book_type_id',
        'book_name',
        'description',
        'status',
        'price',
        'publishing_company',
        'publisher',
        'author',
        'language',
        'date_release',
        'number_of_pages',
        'quantity',
        'deleted_at',

    ];
    protected $attributes = [
        'status' => 0,
        'deleted_at' => null
    ];

}
