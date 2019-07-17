<?php

namespace App\Models;

use App\MasterModel;

class purchase extends MasterModel
{
    protected $table= 'purchases';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'product_id',
        'supplier_id',
        'stock',
        'date',
        'note',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
