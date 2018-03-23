<?php

namespace ActivaElectronic\Http\Controllers;

use Illuminate\Http\Request;

use ActivaElectronic\Http\Requests;
use ActivaElectronic\Http\Controllers\Controller;
use ActivaElectronic\Slider;
use Session;
use Redirect;
use Illuminate\Routing\Route;
class SliderController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
        $this->beforeFilter('@find',['only' => ['edit','update','destroy']]);
    }

      public function find(Route $route){
        $this->slider = Slider::find($route->getParameter('slider'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
             $slider = Slider::Slider();
        return view('slider.index',compact('slider'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('slider.create', compact('sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Slider::create($request->all());
       return Redirect::to('/slider');
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
       return view('slider.edit',['slider'=>$this->slider]);
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
                $this->slider->fill($request->all());
        $this->slider->save();

        Session::flash('message','Slider editado correctamente');
        return Redirect::to('/slider');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
               $this->slider->delete();
        \Storage::delete($this->slider->imagen);
        Session::flash('message','slider eliminado correctamente');
        return Redirect::to('/slider');
    }
}
