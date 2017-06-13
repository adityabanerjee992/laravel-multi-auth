<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildTeacher extends Model
{
    /**
	 * table to be used by this model
	 * @var string
	 */
    protected $table = 'child_teacher';

    
    /**
     * mass assignment
     * @var array
     */
    protected $fillable = ['child_id', 'teacher_id'];
}
