<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Groups;

class GroupsController extends Controller
{
    //
    //prefixed with the HTTP verb they respond to e.g call in url "/SuperAdmin/Users/users-list"
     public function getGroupsList() {
        return view("SuperAdmin/UsersList");
    }
    public function anyUsersListData(){
       return Datatables::of(User::select('*'))->make(true);
    }
}
