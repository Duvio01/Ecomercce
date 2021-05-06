<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHasProduct extends Model
{   
    protected $table ='orders_has_products';
    use HasFactory;
}
