@extends('layouts.principal')

  @section('content')

<!-- Main Container Starts -->
	<div id="main-container" class="container">
	<!-- Breadcrumb Starts -->
		<ol class="breadcrumb">
			<li><a href="{!!URL::to('/')!!}">Inicio</a></li>
			<li class="active">Cotizador</li>

		</ol>
	<!-- Breadcrumb Ends -->
	<!-- Main Heading Starts -->
	
		 <h1  class="main-heading text-center" style="font-family: Orbitron, sans-serif; "><span style="font-size: 28px;">Productos a cotizar</span></h1>
	<!-- Main Heading Ends -->
@if(count($cart))

  <div style="text-align: center;">	<p>
	<a href="{!!URL::to('/productos')!!}" class="btn btn-success"><i class="fa fa-home"></i> Seguir Comprando</a>
	
</p>
</div>



	<!-- Shopping Cart Table Starts -->
		<div class="table-responsive shopping-cart-table">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td class="text-center">
							Imagen
						</td>
							<td class="text-center">
							Marca
						</td>
						<td class="text-center">
							Producto
						</td>							
				<!--		<td class="text-center">
							Precio
						</td>
				-->
						<td class="text-center">
							Cantidad
						</td>
<!--
						<td class="text-center">
							Costo
						</td>
-->
						<td class="text-center">
							Accion
						</td>
					</tr>
				</thead>
				<tbody>
             @foreach($cart as $item)
					<tr>
						<td class="text-center">
							<a href="#">
								<img src="/imagenes/{{ $item->imagen }}" alt="{{ $item->modelo }}" title="{{ $item->modelo }}" class="img-thumbnail" style="width: 115px;" />
							</a>
						</td>
                        <td class="text-center">
							<a href="#">{{ $item->marca }}</a>
						</td>
						<td class="text-center">
							<a href="#">{{ $item->modelo }}</a>
						</td>
<!--
						<td class="text-center">
							${{ number_format($item->preciod,2) }}
						</td>
-->
						<td class="text-center" >
							
							<input 
							class="cantidad" 
							type="number"
							min="1"
							max="100"
							value="{{ $item->cantidad }}"
							id="productos_{{ $item->id }}"
							>
							<a href="#"
						     class="btn btn-warning btn-update-item"
						     data-href="{{ route('cart-update', $item->slug) }}" 
						     data-id = "{{ $item->id }}"
						    > 
						      <i class="fa fa-refresh"></i>	
							</a>
														
						</td>
				<!--		<td class="text-center">
							${{ number_format($item->preciod * $item->cantidad,2) }}
						</td>

						-->
						<td class="text-center">
						
						  
							<a  href="{{ route('cart-delete',$item->slug) }}" class="btn btn-danger">
							<i class="fa fa-times-circle"></i>	eliminar
							</a>	
							
							
						</td>
					</tr>
@endforeach

						
				</tbody>
<!--

				<tfoot>
					<tr>
					  <td colspan="4" class="text-right">
						<strong>Total :</strong>
					  </td>
					  <td colspan="2" class="text-left">
						$300
					  </td>
					</tr>
				</tfoot>  -->
			</table>	
			  <div style="text-align: center;">	<p>
	
</p></div>

		</div>
	<!-- Shopping Cart Table Ends -->



@else
               

<h3 style="text-align: center;" ><span class="label label-warning ">Aun no Tiene Productos Seleccionados</span></h3>

@endif



	<!-- Shipping Section Starts -->
		<section class="registration-area">
			<div class="row">
			<!-- Shipping & Shipment Block Starts -->
				<div class="col-sm-6">

				<!-- Shipment Information Block Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title" style="text-align: center;">
								Enviar Solicitud
							</h3>
						</div>
						<div class="panel-body">
						<!-- Form Starts -->
		 <div class="panel-body">
                       {!!Form::open(['route'=>'pedido.store','method'=>'POST','class' => 'form-horizontal'])!!}
                            
                            <div class="form-group">
                            {!!Form::label('razon','Razon Social:',['class' => 'col-sm-2 control-label'])!!}
                               <div class="col-sm-10">
                                  {!!Form::text('razon',null,['class' => 'form-control','name' =>'razon','id'=>'name','placeholder' => 'Ingrese su Razon Social'])!!}
                                </div>
                            </div>
                             <div class="form-group">
                            {!!Form::label('ruc','Ruc:',['class' => 'col-sm-2 control-label'])!!}
                               <div class="col-sm-10">
                                  {!!Form::text('ruc',null,['class' => 'form-control','name' =>'ruc','id'=>'name','placeholder' => 'Ingrese su Ruc'])!!}
                                </div>
                            </div>
                                 <div class="form-group">
                            {!!Form::label('ciudad','Ciudad:',['class' => 'col-sm-2 control-label'])!!}
                               <div class="col-sm-10">
                                  {!!Form::text('ciudad',null,['class' => 'form-control','name' =>'ciudad','id'=>'name','placeholder' => 'Ingrese su Localidad'])!!}
                                </div>
                            </div>

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
						<!-- Form Ends -->
						</div>
					</div>
				<!-- Shipment Information Block Ends -->
				</div>
			<!-- Shipping & Shipment Block Ends -->
			<!-- Discount & Conditions Blocks Starts -->
				<div class="col-sm-6">
	
				<!-- Conditions Panel Starts -->
					<div class="panel panel-smart">
						<div class="panel-heading">
							<h3 class="panel-title">
								Procedimientos de Cotizacion
							</h3>
						</div>
						<div class="panel-body">
						<h4>Seleccion tus productos</h4>
							<p>
							1.Ingresando a la opcion PRODUCTOS en nuestro portal web selecciona los productos y cantida a cotizar.
							</p>
							<h4>Envia tu Solicitud de cotizacion</h4>
							<p>
								2.Uno de nuestros asesores recibira su email con su solicitud, en la brevedad posible este 
								debera contactarse con ud.
							</p>
							<h4>Revise su Email y/o este atento a su telefono</h4>
							<p>
								3.Nuestros asesores se comunicaran con ud para resolver cualquier duda.
							</p>								
						</div>

					</div>
				<!-- Conditions Panel Ends -->

				
			</div>
		</section>
	<!-- Shipping Section Ends -->
	</div>
<!-- Main Container Ends -->



@stop
