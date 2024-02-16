<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_unit'
    ];

    public function products ()
    {
        return $this->hasMany(Product::class);
    }
}
