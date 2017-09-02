<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\User;

class ProductoController extends Controller
{
	public function __construct() {
		if (!User::isAllowed([2])) {
	      return User::block();
	    }
	}

    
    public function crearGet() {
        return view("crearProducto");
    }

    public function crearPost(Request $request) {
        //1 Validar
        $reglas = [
            "nombre" => "required|string|max:80",
            "descripcion" => "required|string|max:500",
            "plasticoins" => "required|integer|min:1"
        ];

        $this->validate($request, $reglas);

        //2 Crear
        $producto = new Producto;
        $producto->nombre = $request["nombre"];
        $producto->descripcion = $request["descripcion"];
        $producto->plasticoins = $request["plasticoins"];
        $producto->categoria_id = $request["categoria_id"];

        $producto->save();

        //3 Redirigir
        return redirect("dashboard")->with('status', 'Producto creado');
    }

    public function eliminar($id) {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect("dashboard")->with('status', "El producto $producto->nombre ha sido eliminado")
    }

    public function modificarGet($id) {
        $producto = Producto::find($id);

        $data = compact("producto");

        return view("editarProducto", $data);
    }

    public function modificarPost(Request $req, $id) {
        //1 Validar
        $reglas = [
            "nombre" => "required|string|max:80",
            "descripcion" => "required|string|max:500",
            "plasticoins" => "required|integer|min:1"
        ];

        $this->validate($request, $reglas);

        //2 Crear
        $producto = Producto::find($id);
        $producto->nombre = $request["nombre"];
        $producto->descripcion = $request["descripcion"];

        $producto->save();

        //3 Redirigir
        return redirect("dashboard")->with('status', 'Producto creado');
    }

    public function listar() {
        $productos = Producto::paginate(50);

        $data = compact("productos");

        return view("listarProductos", $data);
    }
}
