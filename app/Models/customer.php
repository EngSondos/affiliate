<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;
    protected $fillable =[
        'first_name'	,
        'last_name' ,
        'email'	,
        'marketer_id',
        'address_id'
    ];
}
