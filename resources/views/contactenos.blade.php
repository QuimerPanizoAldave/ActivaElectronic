@extends('layouts.principal')
@section('title', 'Contactenos')
@section('content')
<!-- Main Container Starts -->
    <div id="main-container" class="container">
    <!-- Breadcrumb Starts -->
        <ol class="breadcrumb">
            <li><a href="{!!URL::to('/')!!}">INICIO</a></li>
            <li class="active">contactenos</li>
        </ol>
    <!-- Breadcrumb Ends -->

    <!-- Google Map Starts -->
       <div class="col-md-12">
            <h1><span>Ubiquenos en</span></h1>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.002641981167!2d-77.04964278572199!3d-12.043338710877896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8d2e3809aa1%3A0xcfa46d6fa9549850!2sAv.+Argentina+428%2C+Cercado+de+Lima+15079!5e0!3m2!1ses!2spe!4v1519690622460" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
    <!-- Google Map Ends -->
    <!-- Starts -->
        <div class="row">
        <!-- Contact Details Starts -->
            <div class="col-sm-4">
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contactenos</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled contact-details">
                            <li class="clearfix">
                                <i class="fa fa-home pull-left"></i>
                                <span class="pull-left"><strong>Nuestras Direcciones</strong>   </br>                           
                                    C.C. MESA REDONDA INT. B70- B71 <small> AV. ARGENTINA NRO.428</small><br />
                                    C.C. MALVINAS PLAZA  INT. 2000 <small> AV. ARGENTINA NRO. 608 </small></br>
                                    C.C MALVITEC   INT. D26-D28 <small> AV. ARGENTINA NRO. 460</small>
                                </span>  
                            </li>
                            <li class="clearfix">
                                <i class="fa fa-phone pull-left"></i>
                                <span class="pull-left">
                                   <strong>Nuestros Numeros</strong><br />
                                  931443362 </br>
                              931443364 </br>
                              927791715
                                </span>
                            </li>
                            <li class="clearfix">
                                <i class="fa fa-envelope-o pull-left"></i>
                                <span class="pull-left">
                                    ventas@activaelectronic.pe <br />
                                    
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <!-- Contact Details Ends -->
        <!-- Contact Form Starts -->
            <div class="col-sm-8">
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">Envienos una solicitud</h3>
                    </div>
                    <div class="panel-body">
                       {!!Form::open(['route'=>'email.store','method'=>'POST','class' => 'form-horizontal'])!!}
                      
                            <div class="form-group">
                            {!!Form::label('name','Nombre:',['class' => 'col-sm-2 control-label'])!!}
                               <div class="col-sm-10">
                                  {!!Form::text('name',null,['class' => 'form-control','name' =>'name','id'=>'name','placeholder' => 'Ingrese su Nombre'])!!}
                                </div>
                            </div>

                            <div class="form-group">
                            {!!Form::label('email','Email:',['class' => 'col-sm-2 control-label'])!!}
                                <div class="col-sm-10">
                                   {!!Form::text('email',null,['class' => 'form-control','name' =>'email','id'=>'email','placeholder' => 'Ingrese su Email'])!!}
                               </div>
                            </div>
                            <div class="form-group">
                            {!!Form::label('telefono','Telefono:',['class' => 'col-sm-2 control-label'])!!}
                                <div class="col-sm-10">
                                 {!!Form::text('telefono',null,['class' => 'form-control','name' =>'telefono','id'=>'telefono','placeholder' => 'Ingrese su Telefono'])!!}
                                   
                                </div>
                            </div>
                            <div class="form-group">
                             {!!Form::label('mensaje','Mensaje:',['class' => 'col-sm-2 control-label'])!!}
                                <div class="col-sm-10">
                                {!!Form::textarea('tmensaje',null,['class' => 'form-control','name' =>'mensaje','id'=>'mensaje','placeholder' => 'Ingrese su Mensaje','rows'=>'5'])!!}
                                 
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                {!!Form::submit('ENVIAR',['class'=>'btn btn-black text-uppercase'])!!}
                                    
                                </div>
                            </div>
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        <!-- Contact Form Ends -->
        </div>
    <!-- Ends -->
    </div>
<!-- Main Container Ends -->
@stop