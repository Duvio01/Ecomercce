<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function images() {
        return $this->hasMany(Image::class);
    }

    public function orders() {
        return $this->belongsToMany(Order::class, 'orders_has_products');
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'products_has_categories');
    }
}
