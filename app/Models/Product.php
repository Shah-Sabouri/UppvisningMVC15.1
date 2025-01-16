<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory, Notifiable;

    protected $fillable = [
        'product_name',
        'description',
        'price',
    ];
}
