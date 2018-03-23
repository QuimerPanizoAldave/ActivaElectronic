<?php

namespace ActivaElectronic;
use DB;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected  $table = "categorias";

    protected $fillable =['categoria','slug','descripcion','imagen'];

    public static function Categorias(){
    	return DB::table('categorias')
    	->select('categorias.*')
    	->get();
    }
    public function Productos(){
    	return $this->hasMany('ActivaElectronic\producto');
    }
     public function scopeSearch($query, $marca){
        return $query->where('marca','LIKE',$marca);
    }
    public function scopeSearchCategorias($query, $categoria){
    	return $query->where('categoria','=', $categoria);
    }
    

}
