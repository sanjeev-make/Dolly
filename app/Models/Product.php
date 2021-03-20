<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = 
    [
     'category_id',
     'title',
     'description',
     'image',
     'price',
     'status',
     'tranding_list',
     'featured',
     'favourite',
     'user_id'
    ];
}
