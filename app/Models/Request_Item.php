<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Request_Item extends Model
{
    
    use SoftDeletes;
    protected $table='request_item';

    public function product(){
        return $this->hasOne('App\Models\Product','id','product_id');
    }

}
