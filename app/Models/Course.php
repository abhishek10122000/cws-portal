<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable=[
       'title', 
       'duration', 
       'price', 
       'discount_price', 
       'image', 
       'description', 
    ];
}
