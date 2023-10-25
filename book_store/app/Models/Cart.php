<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;
class Cart extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = 'mongodb';

    protected $fillable = [
        'book_id',
        'user_id',
        'quantity',
        'id_item',
    ];
}
