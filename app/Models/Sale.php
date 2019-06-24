<?php

namespace App\Models;

use App\MasterModel;

class Sale extends MasterModel
{
    
    protected $table= 'sales';
    protected $gruarderd= ['id'];

    // protected $fillable = [
    //     'name',
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
