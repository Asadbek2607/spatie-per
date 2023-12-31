<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'release_date', 'genre', 'price',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
