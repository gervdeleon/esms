<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $primaryKey = "subjectCode";

    protected $fillable = array('subjectCode', 'subjectName', 'subjectSchedule', 'subjectTimeStart', 'subjectTimeEnd', 'subjectTeacher', 'subjectRoom');
}
