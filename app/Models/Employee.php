<?php

namespace App\Models;

use App\MasterModel;

class Employee extends MasterModel
{
    protected $table= 'employees';
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

    public function user()
    {
        return $this->hasMany(App\User::class);
    }

}
