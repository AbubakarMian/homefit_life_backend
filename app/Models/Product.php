<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    use SoftDeletes;
    protected $table = 'product';


    function recomendedProduct()
    {

        return $this->hasOne('App\Models\Recommended_Product', 'product_id', 'id');
    }
}
