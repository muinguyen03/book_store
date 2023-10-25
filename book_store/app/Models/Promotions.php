<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;

class Promotions extends Model
{
    use Authenticatable, Notifiable,HasFactory, SoftDeletes;
    public $timestamps = false;
    protected $connection = 'mongodb';

    protected $fillable = [
        'code',
        'expiry',
        'discount',
        'status',
        'deleted_at'
    ];
    protected $attributes = [
        'status' => 0,
        'deleted_at' => null
    ];

    public function getDiscountFormatAttribute(): string
    {
        return $this->discount." %";
    }
}
