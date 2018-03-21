<?php

namespace suprasac\Http\Controllers;

use Illuminate\Http\Request;

use suprasac\Http\Requests;
use suprasac\Http\Controllers\Controller;
use suprasac\Producto;
use suprasac\Categoria;
use suprasac\Slider;
use DB;
use suprasac\User;
use Carbon\Carbon;
class FrontController extends Controller
{


  public function __construct(){
    $this->middleware('auth',['only'=>'admin']);

  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $cart = \Session::get('cart');
        $slider = Slider::Slider();
        $categorias= Categoria::Categorias();
        $productos = Producto::orderBy('id','DESC')->take(6)->get();
        $productos ->each(function($productos){
        $productos->categoria;
       });
        return view('index',compact('productos','categorias','cart','slider'));
    }

   public  function nosotros()
   {          
              $cart = \Session::get('cart');
              $categorias= Categoria::Categorias();
           return view('nosotros',compact('productos','categorias','cart'));
   }

     public  function politicas()
   {          
              $cart = \Session::get('cart');
              $categorias= Categoria::Categorias();
           return view('politicas',compact('productos','categorias','cart'));
   }


   public  function productos()
   {
    $cart = \Session::get('cart');
    $categorias= Categoria::categorias();
    $productos = Producto::productos();
       return view('productos',compact('productos','categorias','cart'));
   }

   public  function soluciones()
   {
      $cart = \Session::get('cart');
    $categorias= Categoria::categorias();
    $productos = Producto::productos();
       return view('soluciones',compact('productos','categorias','cart'));
   }
  

   public  function desarollo()
   {
      $cart = \Session::get('cart');
    $categorias= Categoria::categorias();
    $productos = Producto::productos();
       return view('desarollo',compact('productos','categorias','cart'));
   }

      public  function software()
   {
      $cart = \Session::get('cart');
    $categorias= Categoria::categorias();
    $productos = Producto::productos();
       return view('software',compact('productos','categorias','cart'));
   }



   public  function descargas()
   {
     return view('descargas');

   }

   public  function contactenos()
   {
         $cart = \Session::get('cart');
    $categorias= Categoria::categorias();
    $productos = Producto::productos();
       return view('contactenos',compact('productos','categorias','cart'));
   }

   public  function distribuidor()
   {
         $cart = \Session::get('cart');
    $categorias= Categoria::categorias();
    $productos = Producto::productos();
       return view('distribuidor',compact('productos','categorias','cart'));
   }



      public function admin(){
         $users = User::Users();
        return view('admin.index',compact('users'));
   }

   public function searchCategorias($categoria){
   $cart = \Session::get('cart');
   $categorias = Categoria::SearchCategorias($categoria)->first();
   $productos = $categorias->productos;

     $productos->each(function($productos){
         $productos->categoria;
         $productos->imagen;
       });
     return view('vista.productos',compact('categorias','cart')) -> with('productos', $productos);
   }
   
public function show($slug)
{
$cart = \Session::get('cart');
$categorias= Categoria::categorias();
$productos = Producto::where('slug',$slug)->first();

$productos_relacionados = Producto::where('categoria_id', '=', $productos->categoria_id)->take(3)->get();

return View('vista.show', compact('productos','categorias', 'productos_relacionados','cart','producto'));
}



}
