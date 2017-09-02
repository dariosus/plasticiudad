<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function home() {
    	if (!User::isAllowed([2])) {
    		return User::block();
    	}

    	return view("dashboard");
    }
}
