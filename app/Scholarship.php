<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable=['description', 'eligibility', 'inclusion', 'deadline', 'course_start', 'course_end', 'logo', 'university_id', 'major_id', 'grade_id'];

    public function majors($value=''){
    	return $this->belongsTo('App\Major');
   	}

   	public function grades($value=''){
    	return $this->belongsTo('App\Grade');
   	}

   	public function university($value=''){
    	return $this->belongsTo('App\University');
   	}
}
