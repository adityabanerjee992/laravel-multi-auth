<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentType extends Model
{
    /**
	 * mass assignment
	 * @var array
	 */
    protected $fillable = [
	    'name', 
	    'active',
    ];

}
