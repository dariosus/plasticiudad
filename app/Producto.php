<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = "producto";
    public $guarded = [];
    public $timestamps = false;

    public function categoria() {
    	return $this->belongsTo('App\Categoria', "categoria_id");
    }
}
