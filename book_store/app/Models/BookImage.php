<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use MongoDB\Laravel\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\SoftDeletes;
class BookImage extends Model
{
    use Authenticatable, HasFactory, Notifiable;
    public $timestamps = false;
    protected $fillable = [
        'id_book',
        'image',
    ];
    protected $attributes = [
        'status' => 0,
    ];
    public function getImgProductAttribute(): string
    {
        return Storage::url($this->image);
    }
}
