<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

class Product_Rating extends Model
{
        use SoftDeletes;
    protected $table='product_rating';
}
