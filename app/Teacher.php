<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use Notifiable;
    
	/**
	 * mass assignment
	 * @var [type]
	 */
    protected $fillable = 
    [
	    'name', 
	    'user_name', 
	    'position', 
	    'date_of_birth', 
	    'email',
	    'password',
        'school_name'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password'];


    /**
     * teacher belongs to many children
     * @return collection
     */
    public function children()
    {
    	return $this->belongsToMany('App\Child');
    }
}
