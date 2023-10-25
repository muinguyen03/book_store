<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';

    protected $fillable = [
        'content',
        'user_id',
        'book_id',
        'date_comment'
    ];
    protected $attributes = [
        'status' => 0,
    ];
}
