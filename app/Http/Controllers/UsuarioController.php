<?php

namespace ActivaElectronic\Http\Controllers;

use Illuminate\Http\Request;
use ActivaElectronic\Http\Requests\UserCreateRequest;
use ActivaElectronic\Http\Requests\UserUpdateRequest;
use ActivaElectronic\User;
use Redirect;
use Session;
use ActivaElectronic\Http\Requests;
use ActivaElectronic\Http\Controllers\Controller;
use Illuminate\Routing\Route;

class UsuarioController extends Controller
{


    public function __construct(){
        $this->middleware('auth');
         $this->middleware('admin');
        $this->beforeFilter('@find',['only'=>['edit','update','destroy']]);
    }


    public function find(Route $route){
        $this->user = User::find($route->getParameter('usuario'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = User::Users();
        $users= User::paginate(5);
        if ($request->ajax()) {
            return response()->json(view('usuario.users',compact('users'))->render());
        }
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create($request->all());
        Session::flash('message','Usuario editado Correctamente');      
        return Redirect::to('/usuario');

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
    
        return view('usuario.edit',['user'=>$this->user]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->user->fill($request->all());

       $this->user->save();
        Session::flash('message','Usuario editado Correctamente');      
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->user->delete();
         Session::flash('message','Usuario eliminado Correctamente');      
        return Redirect::to('/usuario');

    }
}
