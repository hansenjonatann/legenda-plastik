<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'barcode',
        'product_code',
        'name' , 
        'unit_id',
        'price_of_sales' , 
        'price_of_purchase' , 
        'description',
        'stock',
        'total_price'
    ];


    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
