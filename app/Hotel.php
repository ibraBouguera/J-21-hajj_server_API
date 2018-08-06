<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $guarded = [];

    //
    public function housings()
   {
       return $this->hasMany('App\Housing');
   }
    
}
