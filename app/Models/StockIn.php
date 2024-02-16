<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StockIn extends Model
{
    use HasFactory;

    protected $fillable = [
        'stock_in_date',
        'product_id',
        'supplier_id',
        'quantity_add'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function supplier()
{
    return $this->belongsTo(Supplier::class);
}

}
