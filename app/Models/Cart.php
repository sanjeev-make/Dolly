<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = 
    [
     'session_id',
     'title',
     'description',
     'image',
     'price',
     'user_id',
     'quantity',
     'product_id' 
    ];
}
