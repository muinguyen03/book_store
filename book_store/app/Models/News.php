<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;

class News extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = 'mongodb';

    protected $fillable = [
        'title',
        'content',
        'status',
        'date'
    ];
    protected $attributes = [
        'status' => 0,
        'deleted_at' => null
    ];
}
