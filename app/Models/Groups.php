<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'isActive','userId'
    ];
    
    public function members(){
        return $this->hasMany("App\Models\Users",'userId');
    }


}
