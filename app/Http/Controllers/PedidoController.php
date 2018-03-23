<?php

namespace ActivaElectronic\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use ActivaElectronic\Http\Requests;
use ActivaElectronic\Http\Controllers\Controller;
use ActivaElectronic\Producto;

class PedidoController extends Controller
{


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataEmail = [ 'request' => $request->all(), 'datacarrito' => Session::get('cart') ];

        Mail::send('emails.pedido',$dataEmail,function($msj){
     $msj->subject('Solicitud de cotizacion');
     $msj->to('ventas@suprasac.com');
        });
  
        Session::flash('message','Su Cotizacion fue enviado correctamente');
        return Redirect::to('/productos');
    }


}
