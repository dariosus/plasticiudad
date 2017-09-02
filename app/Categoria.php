<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $table = "producto_categoria";
    public $guarded = [];

    public function productos() {
    	return $this->hasMany('App\Producto', "categoria_id");
    }
}
