<?php

namespace App\Models;

use App\MasterModel;

class ProductUnit extends MasterModel
{
    protected $table= 'product_unit';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'name',
    ];
}
