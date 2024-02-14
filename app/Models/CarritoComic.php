<?php

// app/Models/CarritoComic.php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarritoComic extends Model
{
    use HasFactory;

    protected $fillable = [
        'cantidad',
    ];

    public function carrito()
    {
        return $this->belongsTo(Carrito::class);
    }

    public function comic()
    {
        return $this->belongsTo(Comic::class);
    }
}

