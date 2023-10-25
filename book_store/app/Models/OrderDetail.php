<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;
class OrderDetail extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = 'mongodb';

    protected $fillable = [
        'order_code',
        'book',
        'quantity',
    ];
    protected $hidden = [
        '_id', 'order_code'
    ];
}
