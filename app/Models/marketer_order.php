<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class marketer_order extends Model
{
    use HasFactory;
    protected $fillable =[
        'marketer_id',
        'order_id'
    ];}
