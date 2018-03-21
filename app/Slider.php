<?php

namespace suprasac;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Slider extends Model
{
    protected  $table = "sliders";
    protected $fillable=['slug','nombre','descripcion','imagen'];

    public function setImagenAttribute($imagen){
    	if(!empty($imagen)){
    		$nombre=Carbon::now()->second.$imagen->getClientOriginalName();
    		$this->attributes['imagen'] = $nombre;
    		\Storage::disk('local')->put($nombre,\File::get($imagen));
    	}
    }

        public static function Slider(){
    	return DB::table('sliders')
    	->select('sliders.*')
    	->get();
    }





}
