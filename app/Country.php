<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name', 'region_id'];

    public function regions($value=''){
    	return $this->belongsTo('App\Region');
   	}
}
