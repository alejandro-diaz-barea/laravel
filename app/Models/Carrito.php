<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'completed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comics()
    {
        return $this->belongsToMany(Comic::class, 'carrito_comics')->withPivot('cantidad');
    }
}