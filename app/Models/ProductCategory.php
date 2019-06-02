<?php

namespace App\Models;

use App\MasterModel;

class ProductCategory extends MasterModel
{
    protected $table= 'product_category';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'name',
    ];
}
