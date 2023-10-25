<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use Authenticatable, HasFactory, SoftDeletes, Notifiable  ;
    protected $connection = 'mongodb';
    public $timestamps = false;
    protected $fillable = [
        'avatar',
        'name',
        'email',
        'password',
        'phone',
        'status',
        'role',
        'deleted_at'
    ];
    protected $hidden = [
        'password'
    ];
    protected $attributes = [
        'status'  => 0,
        'role'    => 2,
        'image'   => 'https://res.cloudinary.com/dteefej4w/image/upload/v1681474078/users/585e4bf3cb11b227491c339a_gtyczj.png',
        'phone'   => '',
        'deleted_at' => null
    ];
}
