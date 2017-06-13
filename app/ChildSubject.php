<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildSubject extends Model
{	
	/**
	 * mass assignment 
	 * @var array
	 */
    protected $fillable = ['child_id', 'subject_id'];


    /**
     * table to reference 
     * @var string
     */
    protected $table = 'child_subject';
}
