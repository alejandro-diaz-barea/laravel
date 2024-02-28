<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'comic_id',
    ];

    public function comic()
    {
        return $this->belongsTo(Comic::class);
    }
}
