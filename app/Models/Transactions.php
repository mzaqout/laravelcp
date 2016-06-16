<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
     protected $fillable = [
        'actionId', 'userId', 'ip','status','visitedId'
    ];
}
