<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable=['enrollment_id', 'scholar_id', 'status'];
}
