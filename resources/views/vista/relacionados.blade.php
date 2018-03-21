	<!-- Product Carousel Starts -->
							<div id="owl-product" class="owl-carousel">
							   @foreach($productos as $producto)
							<!-- Product #1 Starts -->
								<div class="item">
								
									<div class="product-col">
										<div class="image">
											<img src="imagenes/{{$producto->imagen}}" alt="product" class="img-responsive img-center-sm img-center-xs" />
										</div>
										<div class="caption">
											<h4><a href="{{route('product-detail', $producto->slug)}}">{{$producto->modelo}}</a></h4>
											<div class="price">
												<span class="price-new">{{$producto->marca}}</span> 
												@if(Auth::user() )
												<span class="label label-success">$ {{$producto->precios}}</span>
												@endif
											</div>
											<div class="cart-button button-group">
												<button type="button" class="btn btn-cart">
													<i class="fa fa-shopping-cart"></i> <a href="{{ route('cart-add' , $producto->slug )}}">Añadir para Cotizar</a>
													
												</button>
												<button type="button" title="Wishlist" class="btn btn-wishlist">
													<i class="fa fa-heart"></i>
												</button>
																			
											</div>
										</div>
									</div>
								</div>
							<!-- Product #1 Ends -->
							    @endforeach

							</div>
						<!-- Product Carousel Ends -->