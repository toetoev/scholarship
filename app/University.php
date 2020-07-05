<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    protected $fillable = ['name', 'email', 'address','phone','site_url','country_id','region_id','logo', 'attachment'];

    public function countries($value=''){
    	return $this->belongsTo('App\Country');
   	}

   	public function regions($value=''){
    	return $this->belongsTo('App\Region');
   	}
}
