<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'productName',
        'productCategory',
        'productDescription',
        'productPrice',
        'productImage',
        'vehicleId',

    ];
    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
 }

}
