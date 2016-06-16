<?php

namespace App\models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class UserApplication extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $timestamps  = false;
      protected $table = 'oc_users_application';
    protected $fillable = [
        'user_id', 'application_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */


}
