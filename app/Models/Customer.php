<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_code' , 'customer_name' , 'customer_description' , 'customer_address' , 'customer_phone' , 'customer_email'
    ];
}
