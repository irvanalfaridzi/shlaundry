<?php

namespace App\Models;

use App\MasterModel;

class Customer extends MasterModel
{
    protected $table= 'customers';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'phone',
        'country',
        'city',
        'postalcode',
        'address',
    ];
}
