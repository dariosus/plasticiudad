<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PlasticoinsController extends Controller
{

    public function cargarPlasticoinsGet(){
    	return view("cargarPlasticoins");
    }

    public function cargarPlasticoinsPost(Request $request){
    	//1 validar

        $reglas = [
            "email" => "required|email",
            "plasticoins" => "required|integer|min:1"
        ];

		$this->validate($request, $reglas);


        //2 recuperar usuario
        $user = User::where("email", $request["email"])->first();
        $user->plasticoins +=$request["plasticoins"];
        $user->save();

    	return redirect("dashboard")->with('status', 'Puntos cargados');
    }

}

