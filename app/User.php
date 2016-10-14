<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //use Notifiable;

   protected $table = 'sato_serviciosac.users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    protected $fillable = [
        'name','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $primaryKey = 'id';
}
