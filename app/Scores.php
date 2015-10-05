<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
	protected $primaryKey = "id";

	protected $fillable = array('studentID','subjectCode', 'examScore', 'examTotalScore');
}
