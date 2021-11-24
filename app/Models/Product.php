<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'stock',
        'id_category',
        'id_supplier',
    ];

    public function product_supplier(){
        return $this->belongsTo('App\Models\Supplier','id_supplier');
    }
}
