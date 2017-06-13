<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    
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
