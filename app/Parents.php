<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Parents extends Authenticatable
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


    /**
     * get parent id from the email.
     * @param  $email 
     * @return string
     */
    public static function getIdFromEmail($email)
    {
        return static::where('email', $email)->first()->id;
    }
}
