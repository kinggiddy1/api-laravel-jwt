<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //FILLABLE
    protected $fillable = [
        'name', 
        'description', 
        'quantity'
       ];
}
