<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MiRegisterController extends Controller
{
    public function registerAdmin() {
        if (!User::isAllowed([2])) {
          return User::block();
        }
        return view('auth.register', ["admin" => true]);
    }

    public function registerAdminPost(Request $request) {
    	if (!User::isAllowed([2])) {
	      return User::block();
	    }
    	$this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'userType' => 2,
        ]);

        return redirect("dashboard")->with("status", "Usuario creado");
    }
}
