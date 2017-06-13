<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanSubject extends Model
{
    /**
	 * mass assignment
	 * @var array
	 */
    protected $fillable = ['plan_id', 'subject_id'];


    /**
     * table to reference by this model
     * @var string
     */
    protected $table = 'plan_subject';
}
