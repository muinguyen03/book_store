<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;


class BookType extends Model
{
    use HasFactory, SoftDeletes;
    protected $collection = 'mongodb';
    protected $fillable = [
        'book_type_name',
        'description',
        'status',
        'deleted_at'
    ];
    protected $attributes = [
        'status' => 0,
        'deleted_at' => null
    ];

}
