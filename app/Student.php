<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = "studentID";

    protected $fillable = array('studentID', 'firstname', 'lastname', 'middlename', 'department', 'course', 'year');
}
