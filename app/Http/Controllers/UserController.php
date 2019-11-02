<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use app\User;

class UserController extends Controller
{
    public function index(){
    $users = DB::table('users');
    return view('pages-list-user', compact('users'));
}

    public function create(){
        $users = DB::table('users')->whereNull('deleted_at')->get();;
        return view('pages-create-user', compact('users'));
    }



    public function save(Request $request){
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->password = bcrypt('secret');
        $user->created_by = $request->input('created_by');


        return view('pages-list-user', compact('users'));
    }


}
