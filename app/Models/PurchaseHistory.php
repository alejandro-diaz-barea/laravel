<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha', 'precio', 'cantidad', 'comic_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function carrito()
    {
        return $this->belongsTo(Carrito::class);
    }

    public function comics()
    {
        return $this->hasManyThrough(Comic::class, Carrito::class);
    }
}
