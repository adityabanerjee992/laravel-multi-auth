<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{	
	/**
	 * mass assignment
	 * @var array
	 */
    protected $fillable = ['name'];


    /**
     * a subject belongs to many children
     * @return collection
     */
    public function children()
    {
    	return $this->belongsToMany('App\Child');
    }


    /**
     * each subject belongs to many plans.
     * @return collection
     */
    public function plans()
    {
        return $this->belongsToMany('App\Plan');
    }
}
