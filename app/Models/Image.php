<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'image_path',
        'uploaded_at',
        'probability',
        'user_id',
        'meat_id',
    ];

    public function meats()
    {
        return $this->belongsTo(Meat::class);
    }

    protected $attributes = [
        'meat_id' => 1
    ];

}
