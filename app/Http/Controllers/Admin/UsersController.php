<?php

namespace App\Http\Controllers\Admin;

use Request;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Datatables;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;


class UsersController extends Controller
{
    //prefixed with the HTTP verb they respond to e.g call in url "/SuperAdmin/Users/users-list"
     public function getUsersList() {
         
   
$user = User::findOrFail(1);
   echo  $user->hasRole('admin');   // false
echo  $user->ability(array('admin', 'owner'), array('create-post', 'list-users'));


        //return view("Admin/UsersList");
    }
    
    public function getUsersAdd() {
        return view("Admin/createUser");
    }
    public function postSaveUser(){
        $input = Request::All();


        $validator = Validator::make($input, [
                    'name' => 'required',
                    'mobile' => 'required',
                    'email' => 'required|email',
                    'password' =>'required'
        ]);
        
        if ($validator->fails()) {
            return redirect('/Admin/Users/users-add')->withErrors($validator);
        }
        
        $input['password'] =  bcrypt($input['password']);
        $user = User::create($input);


        $id = $user->id;
        
        
        $input['id'] = $id;

        Transactions::create([
            'actionId' => 1,
            'userId' => Auth::id(),
            'ip' => $_SERVER['REMOTE_ADDR'],
            'status' => 1,
            'visitedId' =>$id
        ]);
        return redirect('/Admin/Users/users-list')->withErrors($validator);
    }
    public function anyUsersListData(){
       return Datatables::of(User::select('*'))->make(true);
    }
    
    
    public function getHome() {
        return view("Admin/home");
        
    }
}
