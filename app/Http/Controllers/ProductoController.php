<?php

namespace suprasac\Http\Controllers;

use Illuminate\Http\Request;
use suprasac\Http\Requests;
use suprasac\Http\Controllers\Controller;
use suprasac\Categoria;
use suprasac\Producto;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class ProductoController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->producto = Producto::find($route->getParameter('product'));
     
     $this->notFound($this->producto);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::Productos();
        return view('product.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::lists('categoria','id');
        return view('product.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Producto::create($request->all());
        return Redirect::to('/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias= Categoria::lists('categoria','id');
        return view('product.edit',['producto'=>$this->producto,'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->producto->fill($request->all());
        $this->producto->save();

        Session::flash('message','producto editado correctamente');
        return Redirect::to('/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->producto->delete();
        \Storage::delete($this->producto->imagen);
        Session::flash('message','Prodcto eliminado correctamente');
        return Redirect::to('/product');
    }
}
