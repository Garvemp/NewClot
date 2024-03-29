<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    //crear el constructor
    public function __Construct(){
        $this->middleware('auth');
        $this->middleware('isadmin');
    }

    public function getUsers(){
        $users = User::orderBy('id', 'Desc')->get();
        $data = ['users' => $users];
        return view('admin.users.home', $data);
    }
}
