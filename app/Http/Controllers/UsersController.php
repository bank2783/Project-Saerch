<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    public function showUsers(){
       $users = User::all();
        return view('Admin.tables.users',compact('users'));
    }
    public function create(Request $request){

    }
    public function update(){

    }
    public function delete(){

    }
}
