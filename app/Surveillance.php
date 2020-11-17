<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Surveillance extends Model
{
    protected $fillable = [		
        'name_of_vehicle',
        'license_plate',
        'model' ,
        'color' ,
        'owner' ,
        'phone_no',
        'reason' ,
        'priority',
		
	];
}
