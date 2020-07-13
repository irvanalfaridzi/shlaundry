<?php

namespace App\Models;

use App\MasterModel;

class Product extends MasterModel
{
    protected $table= 'products';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'code',
        'name',
        'category_id',
        'price',
        'stock',
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function purchase()
    {
        return $this->hasMany(purchase::class);
    }
}
