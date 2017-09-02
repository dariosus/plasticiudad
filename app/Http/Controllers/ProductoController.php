<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
	public function __construct() {
		if (!User::isAllowed([2])) {
	      return User::block();
	    }
	}

    public function crearGet() {

    }

    public function crearPost(Request $request) {

    }

    public function eliminar($id) {

    }

    public function modificarGet($id) {

    }

    public function modificarPost(Request $req) {

    }

    public function listar() {

    }
}
