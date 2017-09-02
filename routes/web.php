<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get("/dashboard", "DashboardController@home");

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'DashboardController@about')->name('about');
Route::get('/convocatoria', 'DashboardController@convocatoria')->name('convocatoria');
Route::get('/catalogo', 'DashboardController@catalogo');

Route::get("/productos/crear", "ProductoController@crearGet");
Route::post("productos/crear", "ProductoController@crearPost");
Route::get("productos/modificar/{id}", "ProductoController@modificarGet");
Route::post("productos/modificar/{id}","ProductoController@modificarPost");
Route::get("productos/eliminar/{id}", "ProductoController@eliminar");
Route::get("productos", "ProductoController@listar");

Route::get("productos/json/{id}", "ProductoController@json");

Route::get("/categorias/crear", "CategoriaController@crearGet");
Route::post("categorias/crear", "CategoriaController@crearPost");
Route::get("categorias/modificar/{id}", "CategoriaController@modificarGet");
Route::post("categorias/modificar/{id}","CategoriaController@modificarPost");
Route::get("categorias/eliminar/{id}", "CategoriaController@eliminar");
Route::get("categorias", "CategoriaController@listar");

Route::get("/registeradmin", "MiRegisterController@registerAdmin");
Route::post("/registeradmin", "MiRegisterController@registerAdminPost");


