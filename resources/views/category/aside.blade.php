		<!-- Sidebar Starts -->

	
			<div class="col-md-3">
			
			<!-- Categories Links Starts -->
				<h3 class="side-heading">Categorias</h3>
				<div class="list-group categories" >
                 @foreach($categorias as $categorias)
					<a href="{{route('/.search.categorias', $categorias->categoria)}}" class="list-group-item">
						<i class="fa fa-chevron-right"></i>
						{{$categorias->categoria}}
					</a>
                    @endforeach
				</div>
			<!-- Categories Links Ends -->
		

			</div>
		<!-- Sidebar Ends -->	