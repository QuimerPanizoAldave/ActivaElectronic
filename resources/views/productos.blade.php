@extends('layouts.principal')
@section('title', 'Productos')
@section('content')
<!-- Main Container Starts -->
	<div id="main-container" class="container">
		<div class="row">

      <!--lista de categoria-->
    @include('category.aside')
<!--fin de lista de categoria-->

		<!-- Primary Content Starts -->
			<div class="col-md-9">
			<!-- Breadcrumb Starts -->
				<ol class="breadcrumb">
					<li><a href="{!!URL::to('/')!!}">Inicio</a></li>
					<li class="active">Nuestros Productos</li>
				</ol>
			<!-- Breadcrumb Ends -->


	              <div class="col-md-12 product-agileinfon-grid1">



								<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
									<ul id="myTab" class="nav1 nav1-tabs left-tab" role="tablist">

								<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">

									<li role="presentation" class="active">

									<a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">

									<img src="images/menu1.png"></a>

									</li>



								</ul>



									<div id="myTabContent" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
											<div class="product-tab">
											@foreach($productos as $producto)
												<div class="col-md-4 product-tab-grid simpleCart_shelfItem">
													<div class="grid-arr">
														<div  class="grid-arrival">
															<figure>
																<a href="#" class="new-gri" data-toggle="modal" data-target="#myModal1">

																	<div class="grid-img">
																		<img  src="imagenes/{{$producto->imagen}}" class="img-responsive"  alt="">
																	</div>
																</a>
															</figure>
														</div>
														<div class="block">
															<div class="starbox small ghosting"> </div>
														</div>
														<div class="women">
															<h6><a href="{{route('product-detail', $producto->slug)}}">{{$producto->modelo}}</a></h6>

															<span class="size">{{$producto->marca}}</span>
                                                             
                                                               @if(Auth::user() )
												<span class="label label-success">$ {{$producto->precios}}</span>
												@endif

															</br>

												
                                               

                                                          <a href="{{route('product-detail', $producto->slug)}}" class="btn btn-primary">
													 <span class=" " aria-hidden="true">Ver detalle</span>
													 </a>
													 
												
																			
											</div>
															
														</div>
													</div>
												</div>
				                                          @endforeach

												<div class="clearfix"></div>
											</div>

										</div>

									</div>
								</div>



							</div>



				</div>
			<!-- Product Grid Display Ends -->

				<hr />

			</div>
		<!-- Primary Content Ends -->
		</div>
	</div>
<!-- Main Container Ends -->
@stop
