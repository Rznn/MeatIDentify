<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'image_id',
        'rate',
        'comment',
    ];


    public function images()
    {
        return $this->belongsTo(Image::class, 'image_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
