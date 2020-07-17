<?php

namespace App\Models;

use App\MasterModel;

class Product extends MasterModel
{
    protected $table= 'kostum';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'name',
        'category_id',
        'status'
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
