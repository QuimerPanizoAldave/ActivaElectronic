<?php

namespace suprasac\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use suprasac\Http\Requests;
use suprasac\Http\Controllers\Controller;

class DistribuidorController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mail::send('emails.distribuidores',$request->all(),function($msj){
     $msj->subject('Registro de distribuidores');
     $msj->to('ventas@suprasac.com');
        });
  
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/distribuidor');
    }


}
