<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use SoftDeletes;
    protected $table = 'cart';

    public function product()
    {
       return $this->hasOne('App\Models\Product', 'id', 'product_id');
    }

}
