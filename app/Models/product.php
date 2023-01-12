<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name_en',
        'name_er',
        'details_en',
        'details_ar',
        'image',
        'image_url',
        'quantity',
        'price',
        'status',
        'category_id'
    ];
}
