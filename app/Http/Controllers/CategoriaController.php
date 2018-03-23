<?php

namespace ActivaElectronic\Http\Controllers;

use Illuminate\Http\Request;
use ActivaElectronic\Categoria;
use ActivaElectronic\Http\Requests;
use ActivaElectronic\Http\Requests\CategoriaRequest;
use ActivaElectronic\Http\Controllers\Controller;
use Illuminate\Routing\Route;
class CategoriaController extends Controller
{
     public function __construct(){
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->categoria = Categoria::find($route->getParameter('categori'));
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  public function index(Request $request)
     {
 
      //
      if ($request->ajax()) {
           $categorias = Categoria::all();
           return response()->json($categorias);
       }
      
       return view('categori.index', compact('categoria'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriaRequest $request)
    {
        if ($request->ajax()) {
            Categoria::create($request->all());
            return response()->json([
                    "mensaje"=> "creado"
                ]);
        }
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
       $categoria = Categoria::find($id);
       return response()->json($categoria);
       return response()->json($this->categoria);
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
        $categoria  = Categoria::find($id);
        $categoria->fill($request->all());
        $categoria->save();
        $this->categoria->fill($request->all());
        $this->categoria->save();
        return response()->json(["mensaje" => "listo"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->categoria->delete();
        return response()->json(["mensaje"=>"borrado"]);
    }


}
