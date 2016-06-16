<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Datatables;
use App\Models\User;

class UsersController extends Controller
{
    //prefixed with the HTTP verb they respond to e.g call in url "/SuperAdmin/Users/users-list"
     public function getUsersList() {
        return view("SuperAdmin/UsersList");
    }
    public function anyUsersListData(){
       return Datatables::of(User::select('*'))->make(true);
    }
    
    
    public function getHome() {
        return view("SuperAdmin/home");
        
    }
}
