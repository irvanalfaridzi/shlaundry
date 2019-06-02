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
        'unit_id',
        'category_id',
        'price',
    ];
}
