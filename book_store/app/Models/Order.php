<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $connection = 'mongodb';

    protected $fillable = [
        'user_id',
        'order_code',
        'order_date',
        'payment_method',
        'total',
        'user',
        'promotion',
        'tracking',
        'status_payment',
        'ship',
        'subtotal',
        'address',
    ];
    protected $attributes = [
        'tracking' => 0,
        'status_payment' => 0,
    ];
    protected $hidden =[
      'user_id', '_id'
    ];
}
