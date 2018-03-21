@extends('layouts.principal')

  @section('content')
  
<!-- Main Container Starts -->
	<div id="main-container" class="container">
	<!-- Breadcrumb Starts -->
		<ol class="breadcrumb">
			<li><a href="index.html">Inicio</a></li>
			<li><a href="category-grid.html">Categoria</a></li>
			<li class="active">Producto</li>
		</ol>
	<!-- Breadcrumb Ends -->

	<!-- Product Info Starts -->
		<div class="row product-info full">
		<!-- Left Starts -->

			<div class="col-sm-4 images-block">
				<a href="">
					<img src="/imagenes/{{$productos->imagen}}" alt="Image" class="img-responsive thumbnail" />
				</a>
				<ul class="list-unstyled list-inline">
					<li>
						<a href=" ">
							<img src="/imagenes/{{$productos->imagen}}	" alt="Image" class="responsive-img" style="width: 70px;" />
						</a>
					</li>
	
				</ul>
			</div>

		<!-- Left Ends -->
		<!-- Right Starts -->
			<div class="col-sm-4 product-details">
				<div class="panel-smart">
				<!-- Product Name Starts -->
					<h2></h2>
				<!-- Product Name Ends -->
					
				<!-- Manufacturer Starts -->
					<ul class="list-unstyled manufacturer">
						<li>
							<span>Marca:</span> {{$productos->marca}}			</li>
						<li><span>Modelo:</span> {{$productos->modelo}} </li>
						<li>
							<span>stock:</span> <strong class="label label-success"> {{$productos->stock}} unidades</strong>
						</li>
					</br>
						<li><button type="button" class="btn btn-info">Pregunte por Diseños Y colores</button></li>
					</ul>
				<!-- Manufacturer Ends -->
					
				<!-- Price Starts -->
					<div class="price">
					<!--	 <span class="price-head">Costo de producto :</span>
						<span class="price-new">solo distribuidores</span>
						-->
			
					</div>
				<!-- Price Ends -->
					<hr />
				<!-- Available Options Starts -->
					<div class="options">
						<div class="form-group">
							<label class="control-label text-uppercase" for="input-quantity">Ingrese cantidad:</label>
							<input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control" />
						</div>
					</div>
				<!-- Available Options Ends -->
				</div>
			</div>
		<!-- Right Ends -->
		</div>
	<!-- Product Info Ends -->

	<!-- Tabs Starts -->
		<div class="tabs-panel panel-smart">
		<!-- Nav Tabs Starts -->
			<ul class="nav nav-tabs">
				<li class="active">
					<a href="#tab-description">Descripcion</a>
				</li>

				<li>
					<a href="#tab-specification">Ficha tecnica</a>
				</li>
			</ul>
		<!-- Nav Tabs Ends -->
		<!-- Tab Content Starts -->
			<div class="tab-content clearfix">
			<!-- Description Starts -->
				<div class="tab-pane active" id="tab-description">
					<p>
					{{$productos->description}}
					</p>
				</div>
			<!-- Description Ends -->
			<!-- Specification Starts -->
				<div class="tab-pane" id="tab-specification">
                  <div class="ficha">

                 {!! $productos->ficha !!} 
                 
					
                  </div>

				</div>
			<!-- Specification Ends -->
			<!-- Additional Information Starts -->
				<div class="tab-pane" id="tab-ainfo">
					<img src="/imagenes/{{$productos->diagrama}}" alt="" style="width: 100%;">
				</div>
			<!-- Additional Information Ends -->
			<!-- Review Starts -->
				<div class="tab-pane" id="tab-review">
					<form class="form-horizontal">
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-name">Nombre</label>
							<div class="col-sm-10">
							<input type="text" name="name" value="" id="input-name" class="form-control" />
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label" for="input-review">Mensaje</label>
							<div class="col-sm-10">
								<textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
								<div class="help-block">
									ingrese aqui sus consultas..
								</div>
							</div>
						</div>
						<div class="form-group required">
							<label class="col-sm-2 control-label ratings">cantidad</label>
							<div class="col-sm-10">
								Bad&nbsp;
								<input type="radio" name="rating" value="1" />
								&nbsp;
								<input type="radio" name="rating" value="2" />
								&nbsp;
								<input type="radio" name="rating" value="3" />
								&nbsp;
								<input type="radio" name="rating" value="4" />
								&nbsp;
								<input type="radio" name="rating" value="5" />
								&nbsp;Good
							</div>
						</div>
						<div class="buttons">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="button" id="button-review" class="btn btn-black">
									ENVIAR
								</button>
							</div>
						</div>
					</form>
				</div>
			<!-- Review Ends -->
			</div>
		<!-- Tab Content Ends -->
		</div>
	<!-- Tabs Ends -->
	<!-- Related Products Starts -->
		<div class="product-info-box">
			<h4 class="heading">Productos relacionados</h4>
		<!-- Products Row Starts -->
			<div class="row">
  @foreach($productos_relacionados as $producto_relacionado)
			<!-- Product #1 Starts -->
				<div class="col-md-3 col-sm-6">
					<div class="product-col">
						<div class="image">
							<img src="/imagenes/{{$producto_relacionado->imagen}}" alt="product" class="img-responsive img-center-sm" />
						</div>
						<div class="caption">
							<h4><a href="product.htm#"></a></h4>
							<div class="price">
								<span class="precio_nuevo">{{$producto_relacionado->modelo}}</span>
							
							</div>
							<div class="cart-button button-group">
								<button type="button" class="btn btn-cart">
									<i class="fa fa-shopping-cart"></i>
									Agregar a Cotizador
								</button>
					
							</div>
						</div>
					</div>
				</div>
			<!-- Product #1 Ends -->
@endforeach

			</div>
		<!-- Products Row Ends -->
		</div>
	<!-- Related Products Ends -->
	</div>
<!-- Main Container Ends -->

@stop
