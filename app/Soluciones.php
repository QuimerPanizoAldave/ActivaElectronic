<?php

namespace suprasac;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Soluciones extends Model
{
       protected  $table = "soluciones";
    protected $fillable=['slug','nombre','descripcion','imagen'];

    public function setImagenAttribute($imagen){
    	if(!empty($imagen)){
    		$nombre=Carbon::now()->second.$imagen->getClientOriginalName();
    		$this->attributes['imagen'] = $nombre;
    		\Storage::disk('local')->put($nombre,\File::get($imagen));
    	}
    }

        public static function Soluciones(){
    	return DB::table('soluciones')
    	->select('soluciones.*')
    	->get();
    }
}
