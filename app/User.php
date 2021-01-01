<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    protected $table='users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRoleIdAttribute($value)
    {
        if($value == 1){
            $role = 'Super Admin';
        }
        elseif($value == 3){
            $role = 'Trainer';
        }
        else{
            $role = 'User';
        }
        return ucfirst($role );
    }
    public static $rules = [
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users',
        'password' => 'required'
    ];
}
