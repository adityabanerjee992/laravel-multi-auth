<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    /**
	 * mass assignment
	 * @var array
	 */
    protected $fillable = 
    [
	    'name', 
	    'user_name', 
	    'work_place', 
	    'email', 
	    'position',
	    'date_of_birth', 
	    'payment_type_id',
	    'password',
    ];

	
	/**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password'];


    /**
     * parent has many children
     */
    public function children()
    {
    	return $this->hasMany('App\Child', 'parents_id');
    }
}
