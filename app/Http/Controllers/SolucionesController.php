<?php

namespace suprasac\Http\Controllers;

use Illuminate\Http\Request;

use suprasac\Http\Requests;
use suprasac\Http\Controllers\Controller;
use suprasac\Soluciones;
use Session;
use Redirect;
use Illuminate\Routing\Route;
class SolucionesController extends Controller
{
        public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

      public function find(Route $route){
        $this->soluciones = Soluciones::find($route->getParameter('soluciones'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                    $soluciones = Soluciones::Soluciones();
        return view('soluciones.index',compact('soluciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('soluciones.create', compact('soluciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Soluciones::create($request->all());
        return "Listo";
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
         return view('soluciones.edit',['soluciones'=>$this->soluciones]);
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
              $this->soluciones->fill($request->all());
        $this->soluciones->save();

        Session::flash('message','Solucion editado correctamente');
        return Redirect::to('/soluciones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                     $this->soluciones->delete();
        \Storage::delete($this->soluciones->imagen);
        Session::flash('message','soluciones eliminado correctamente');
        return Redirect::to('/soluciones');
    }
}
