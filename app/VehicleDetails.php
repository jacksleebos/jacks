<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleDetails extends Model
{
    protected $fillable = [
        'productId',
        'productPrice',
        'quantity',
        'vehicleId',

    ];

  /*   public function vehicle()
    {
    	return $this->belongsTo('App\Vehicle');
    } */
    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
