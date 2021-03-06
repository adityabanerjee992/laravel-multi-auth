<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Child extends Authenticatable
{	
	use Notifiable;

	/**
	 * mass assignment
	 * @var array
	 */
    protected $fillable = 
    [
	    'name', 
	    'user_name', 
	    'school_name', 
	    'email', 
	    'date_of_birth', 
	    'parents_id',
        'plan_id',
	    'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password'];


    /**
     * [teachers description]
     * @return collection
     */
    public function teachers()
    {
    	return $this->belongsToMany('App\Teacher');
    }


    /**
     * a child belongs to a parent.
     * @return collection
     */
    public function parent()
    {
    	return $this->belongsTo('App\Parents', 'parents_id');
    }


    /**
     * a child belongs to many subjects
     * @return collection
     */
    public function subjects()
    {
    	return $this->belongsToMany('App\Subject');
    }
}
