<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_code' , 'supplier_name' , 'supplier_description' , 'supplier_address' , 'supplier_phone' , 'supplier_email' , 'supplier_address'
    ];

    public function stockIns()
{
    return $this->hasMany(StockIn::class);
}

}
