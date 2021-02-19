<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Recommended_Product extends Model
{

    use SoftDeletes;
    protected $table = 'recommended_products';


    public function products()
    {
        return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }
}
