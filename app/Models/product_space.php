<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_space extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_id',
        'space_id'
    ];}
