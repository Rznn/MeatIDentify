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
        return $this->belongsTo(Meat::class, 'meat_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // protected $attributes = [
    //     'meat_id' => 1,
    //     'probability' => '93',
    // ];

}
