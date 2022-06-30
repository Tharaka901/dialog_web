<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function UserView(){
       //$allData = User::all();
       $data['allData'] = User::all();
       return view('backend.user.view_user',$data);
    }

    //Dashboard
    public function dashBoard(){
        return view('admin.index');
    }

    public function editUser(){
        return view('backend.user.edit_user');
    }

    public function AddUser(){
        return view('auth.register');
    }
}
