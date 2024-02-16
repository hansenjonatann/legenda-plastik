<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'code_sales',
        'customer_id',
        'product_id',
        'price',
        'quantity',
        'total_price',
        'payment',
        'return'
        
    ];

    public function products ()
    {
        return $this->hasMany(Product::class, 'id');
    }

    
}
