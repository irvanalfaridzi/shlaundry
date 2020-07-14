<?php

namespace App\Models;

use App\MasterModel;

class ProductCategory extends MasterModel
{
    protected $table= 'jenis_kostum';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'name',
    ];

    public function service()
    {
        return $this->hasMany(Service::class);
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
