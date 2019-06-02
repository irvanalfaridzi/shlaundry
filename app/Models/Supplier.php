<?php

namespace App\Models;

use App\MasterModel;

class Supplier extends MasterModel
{
    protected $table= 'suppliers';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'code',
        'firstname',
        'lastname',
        'company',
        'phone',
        'email',
        'country',
        'city',
        'postalcode',
        'address',
        'note',
    ];
}
