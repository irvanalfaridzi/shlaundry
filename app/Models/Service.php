<?php

namespace App\Models;

use App\MasterModel;

class Service extends MasterModel
{
    protected $table= 'services';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'category_id',
        'code',
        'name',
        'price',
        'description',
    ];


    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

}
