<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\UserApplication;
class RegistrController extends Controller
{
    //
    public function registration($id,$application){
       
        UserApplication::create([
            'user_id' => $id,
            'application_id' => $application,
        ]);
    }
}
