<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'image_path',
        'uploaded_at',
        'probability',
        'user_id',
        'meat_id',
    ];

    protected $dates = ['deleted_at'];

    public function meats()
    {
        return $this->belongsTo(Meat::class, 'meat_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    // protected $attributes = [
    //     'meat_id' => 1,
    //     'probability' => '93',
    // ];

}
