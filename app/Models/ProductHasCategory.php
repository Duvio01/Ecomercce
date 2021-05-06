<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductHasCategory extends Model
{
    protected $table ='products_has_categories';
    use HasFactory;
}
