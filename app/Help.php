<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    protected $fillable = [		
		'name',
		'complaint',
        'email',		
        'phone_no',
		
	];
}
