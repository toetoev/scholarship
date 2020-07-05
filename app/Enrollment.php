<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    protected $fillable = ['name', 'DOB', 'gender','phone','country_id','citizen_id','university_id','grade_id','user_id', 'english', 'photo', 'attachment'];
}
