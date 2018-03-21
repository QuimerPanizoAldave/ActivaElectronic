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
	<a href="{{ route('cart-trash') }}" class="btn btn-danger" style="text-align: left;"><i class="fa fa-trash"></i> vaciar el cotizador</a>
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
						<td class="text-center">
							
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
<div style="text-align: center;">
<a href="{{ route('order-detail') }}" class="btn btn-primary" style="text-align: left;"><i class="fa fa-envelope"> </i> Enviar Solicitud</a>
	
</div>

@else
               

<h3 style="text-align: center;" ><span class="label label-warning ">Aun no Tiene Productos Seleccionados</span></h3>

@endif

	</div>
<!-- Main Container Ends -->



@stop
