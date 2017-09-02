<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\User;

class CategoriaController extends Controller
{
    public function __construct() {
		if (!User::isAllowed([2])) {
	      return User::block();
	    }
	}

    public function crearGet() {
        return view("crearCategoria");
    }

    public function crearPost(Request $request) {
        //1 Validar
        $reglas = [
            "nombre" => "required|string|max:80",
            "descripcion" => "required|string|max:500"
        ];

        $this->validate($request, $reglas);

        //2 Crear
        $categoria = new Categoria;
        $categoria->nombre = $request["nombre"];
        $categoria->descripcion = $request["descripcion"];

        $categoria->save();

        //3 Redirigir
        return redirect("dashboard")->with('status', 'Categoria creada');
    }

    public function eliminar($id) {
        $categoria = Categoria::find($id);
        $categoria->delete();

        return redirect("dashboard")->with('status', "La categoria $categoria->nombre ha sido eliminada")
    }

    public function modificarGet($id) {
        $categoria = Categoria::find($id);

        $data = compact("categoria");

        return view("editarCategoria", $data);
    }

    public function modificarPost(Request $req, $id) {
        //1 Validar
        $reglas = [
            "nombre" => "required|string|max:80",
            "descripcion" => "required|string|max:500"
        ];

        $this->validate($request, $reglas);

        //2 Crear
        $categoria = Categoria::find($id);
        $categoria->nombre = $request["nombre"];
        $categoria->descripcion = $request["descripcion"];

        $categoria->save();

        //3 Redirigir
        return redirect("dashboard")->with('status', 'Categoria creada');
    }

    public function listar() {
        $categorias = Categoria::paginate(50);

        $data = compact("categorias");

        return view("listarCategorias", $data);
    }
}
