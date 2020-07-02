<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
class Recurring_Cart extends Model
{
   
        use SoftDeletes;
    protected $table='recurring_cart';
}
