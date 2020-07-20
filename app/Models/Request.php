<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\SoftDeletes;

class Request extends Model
{
    use SoftDeletes;
    protected $table='request';

    public function user(){
        return $this->hasOne('App\User','id','user_id');
    }


    public function request_items(){
        return $this->hasMany('App\Models\Request_Item','request_id','id');
    }
}
