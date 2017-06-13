<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{	
	/**
	 * mass assignment
	 * @var array
	 */
    protected $fillable = ['name'];


    /**
     * each plan belongs to many subjects.
     * @return collection
     */
    public function subjects()
    {
    	return $this->belongsToMany('App\Subject');
    }
}
