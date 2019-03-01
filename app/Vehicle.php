<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
   protected $fillable = [
    'vehicleName',
    'vehicleModel',
    'vehicleBuild',
   ];
   public function vehicleDetails()
   {
       return $this->hasMany('App\Product');
}
}
