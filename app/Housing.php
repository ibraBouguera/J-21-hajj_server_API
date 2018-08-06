<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Housing extends Model
{
    protected $guarded = [];

    public function hotel()
   {
       return $this->belongsTo('App\Hotel');
   }
}
