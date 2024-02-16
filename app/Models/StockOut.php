<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock_out_date',
        'product_id',
        'customer_id',
        'quantity_out'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customer()
{
    return $this->belongsTo(Customer::class);
}
}
