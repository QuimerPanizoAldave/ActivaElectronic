@extends('layouts.principal')
@section('content')

 <!-- Breadcrumbs - START -->
    <div class="breadcrumbs-container">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="{!!URL::to('/')!!}">INICIO</a></li>
          <li class="active">Desarollo de softawre</li>
        </ol>
      </div>
    </div>
    <!-- Breadcrumbs - END -->
    <section class="">
    <div class="container">
    <h1 style="font-family: Orbitron, sans-serif; "><span style="font-size: 28px;">  Software control de personal</span></h1>
    	<div class="row">
      <div class="col-md-12">
              <div class="col-md-9" style="text-align: justify;">
                Time Manager es un software de control de asistencia desarrollado en plataforma web, que permite controlar el ingreso y salida de usuarios por medio de huellas digitales, tarjetas de proximidad, y lectores de código de barras.

Nuestra propuesta es una solución integrada con terminales biométricos y RFID, el cual evitará las típicas suplantaciones o fraudes de marcación. Con ello usted podrá mejorar su administración de recursos humanos, optimizando sus procesos, ahorrando tiempo, y evitando sanciones por parte del Ministerio.

Este Software dado que esta desarrollado en plataforma web le permitirá al administrador del sistema poder utilizar el software desde cualquier estación con conexión a internet, esto sin necesidad de estar físicamente en las oficinas de trabajo.
Time Manager es una solución de fácil integración con todo tipo de equipo de marcación, que disponga de conectividad TCP/IP o USB.

  <h4>DIAGRAMA DE SOLUCION</h4>
              </div>

              <div class="col-md-3">
                <img src="imagenes/software.png" alt="" style="width: 125px; height: 125px;">
              </div>
      </div>
         
 </br>
              <div class="col-md-12">
              <div class="col-md-6">
                <img src="images/caracteristicas_software6.png" alt="" style="width: 100%;" >
              </div>
                <div class="col-md-6">
                     <img src="images/caracteristicas_software.png" alt="" style="width:100%;">
                </div>
              </div>
              <h4>ASIGNACION DE HORARIOS</h4>
                    <div class="col-md-12">
              <div class="col-md-6">
                <img src="images/caracteristicas_software1.png" alt="" style="width: 100%;" >
              </div>
                <div class="col-md-6">
                     <img src="images/caracteristicas_software2.png" alt="" style="width:100%;">
                </div>
              </div>
              <h4>REPORTES DE ACUERDO A MINISTERIO</h4>
        
                <div class="col-md-12">
              <div class="col-md-6">
                <img src="images/caracteristicas_software4.png" alt="" style="width: 100%;" >
              </div>
                <div class="col-md-6">
                     <img src="images/caracteristicas_software5.png" alt="" style="width:100%;">
                </div>
              </div>
                   
    </div>
    </div>
    </section>

   <!-- Component: pricing/pricing-alt3.html - START -->
  <!--  <section class="">
      <div class="container">
        <h1><span>sistema para punto de venta</span></h1>
        <div class="row">
               <div class="col-md-9">..</div>
              <div class="col-md-3">...</div>
        </div>    
      </div>
    </section>
    -->
    <!-- Component: pricing/pricing-alt3.html - END -->

@stop