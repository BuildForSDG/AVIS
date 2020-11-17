<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [		
    'name_of_vehicle',
    'license_plate' ,
    'chasis_no' ,
    'engine_no' ,
    'model' ,
    'color' ,
    'owner' ,
    'phone_no' ,
    'address'  ,
    'email' ,
    'gender'   ,
    'id_means'   ,
    'id_means_no' ,
    
    ];
}
