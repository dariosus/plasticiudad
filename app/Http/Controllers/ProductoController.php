<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\User;
use App\Categoria;
use Storage;

class ProductoController extends Controller
{
    
    public function crearGet() {
        if (!User::isAllowed([2])) {
          return User::block();
        }
        $categorias = Categoria::all();
        $data = compact("categorias");
        return view("crearProducto", $data);
    }

    public function crearPost(Request $request) {
        if (!User::isAllowed([2])) {
          return User::block();
        }
        //1 Validar
        $reglas = [
            "nombre" => "required|string|max:80",
            "descripcion" => "required|string|max:500",
            "plasticoins" => "required|integer|min:1"
        ];

        $this->validate($request, $reglas);

        //2 Crear
        $producto = new Producto;
        $producto->foto = "";
        $producto->nombre = $request["nombre"];
        $producto->descripcion = $request["descripcion"];
        $producto->plasticoins = $request["plasticoins"];
        $producto->categoria_id = $request["categoria_id"];

        $foto = $request->file("foto");
        
        $nombreFoto = Storage::putFile("public/productos", $foto);
        $producto->foto = $nombreFoto;

        $producto->save();

        //3 Redirigir
        return redirect("dashboard")->with('status', 'Producto creado');
    }

    public function eliminar($id) {
        if (!User::isAllowed([2])) {
          return User::block();
        }
        $producto = Producto::find($id);
        $producto->delete();

        return redirect("dashboard")->with('status', "El producto $producto->nombre ha sido eliminado");
    }

    public function modificarGet($id) {
        if (!User::isAllowed([2])) {
          return User::block();
        }
        $producto = Producto::find($id);

        $data = compact("producto");

        return view("editarProducto", $data);
    }

    public function modificarPost(Request $req, $id) {
        if (!User::isAllowed([2])) {
          return User::block();
        }
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
        if (!User::isAllowed([2])) {
          return User::block();
        }
        
        $productos = Producto::paginate(50);

        $data = compact("productos");

        return view("listarProductos", $data);
    }

    public function json($id) {
        return Producto::findOrFail($id);
    }
}
