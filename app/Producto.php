<?php

namespace suprasac;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use DB;

class Producto extends Model
{
    protected  $table = "productos";
    protected $fillable=['codigop','imagen','marca','slug','modelo','calificacion','stock','preciod','precios','descrip','description','ficha','diagrama','categoria_id'];

    public function setImagenAttribute($imagen){
    	if(!empty($imagen)){
    		$codigop=Carbon::now()->second.$imagen->getClientOriginalName();
    		$this->attributes['imagen'] = $codigop;
    		\Storage::disk('local')->put($codigop,\File::get($imagen));
    	}
    }

        public function setDiagramaAttribute($diagrama){
        if(!empty($diagrama)){
            $codigop=Carbon::now()->second.$diagrama->getClientOriginalName();
            $this->attributes['diagrama'] = $codigop;
            \Storage::disk('local')->put($codigop,\File::get($diagrama));
        }
    }

    public static function Productos(){
    	return DB::table('productos')
    	->join('categorias','categorias.id','=','productos.categoria_id')
    	->select('productos.*','categorias.categoria')
    	->get();
    }
    
    public function scopeSearch($query, $categoria){
        return $query->where('categoria','like',$categoria);
    }
       public function scopeSearchCategoria($query, $productos){
        return $query->where('productos','=', $productos);
    }
    public function scopeCategoria($query, $productos)
    {
        $query->where('categoria',$categoria);
    }

    public function Select()
   {
      /**Construcción del select dinámico:
      1.-realizo una consulta a la tabla categorias = Categorias::all()
      2.-armo una lista con los valores nombre y id de la tabla categoria= list('nombre','id')
      3.-todo lo anterior se lo paso a una variable, la cual despues paso en el return*/ 
      $select = Categoria::all()-> lists('categoria','id');

      return $select;
   }
   public function show(){
  $productos_relacionados = Producto::where('categoria_id', '=', $producto->categoria_id);
   }
   
   public function order_item()
   {
    return $this->hasOne('suprasac\OrderItem');
   }

}
