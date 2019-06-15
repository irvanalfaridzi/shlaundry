<?php

namespace App\Models;

use App\MasterModel;
class Role extends MasterModel
{
    protected $table= 'roles';
    protected $gruarderd= ['id'];

    protected $fillable = [
        'name',
    ];

    public function user()
    {
        return $this->hasMany(App\User::class);
    }
}
