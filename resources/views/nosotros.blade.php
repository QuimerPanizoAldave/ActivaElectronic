@extends('layouts.principal')
@section('title', 'Nosotros')
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
					<li class="active">Nosotros</li>
				</ol>
			<!-- Breadcrumb Ends -->
			<!-- About Content Starts -->
				<div class="page-box">
					<div class="row">
						<div class="col-sm-4">
							<img src="images/contc1.png" alt="image" class="img-responsive" "/>
							<!--style="height: 300px;width: 260px; -->
						</div>
						<div class="col-sm-8">
							<h3>Presentacion</h3>
							<h4>NOSOTROS</h4>

							<p>
								somos ACTIVA ELECTRONIC”, empresa dedicada a la importación, distribución y venta de protectores y accesorios para celulares, fundas y carcasas con diseños creativos.
							</p>
						</div>
					</div>
				</div>					
			<!-- About Content Ends -->

			<!-- Testimonials Starts -->
				<h2 class="sub-heading text-center">
					SOBRE NOSOTROS
				</h2>
			<!-- Testimonial #1 Starts -->
				
					<div class="bs-callout bs-callout-success">
                        <h4>Mision</h4>
                           Ofrecer a nuestros clientes una amplia gama de accesorios para celulares con el objetivo de proteger, decorar, personalizar, perfeccionar y mejorar la experiencia de uso del teléfono celular, acompañado de la mejor infraestructura y atención al cliente, asimismo nos centralizaremos en los desafíos y necesidades de nuestros clientes, brindando excelentes soluciones y protectores de última tendencia en tecnología.
                    </div>

			<!-- Testimonial #1 Ends -->
			<!-- Testimonial #2 Starts -->
					
					<div class="bs-callout bs-callout-warning">
  <h4>Valores</h4>
  Nuestro objetivo es brindarles innovadores diseños en protectores y accesorios para su móvil que estos no se alejen del principal fin el cual es proteger el dispositivo.
Además, contaremos con el servicio de asesoría para ustedes con el propósito de guiarles a elegir el modelo de protector más adecuado para su celular."

</div>
				
			
			<!-- Testimonial #2 Ends -->
			<!-- Testimonial #3 Starts -->
<div class="bs-callout bs-callout-danger">
  <h4>Vision</h4>
 Ser reconocidos como una marca líder en el mercado de accesorios para celulares a nivel nacional e internacional, satisfaciendo las necesidades de nuestros clientes.
</div>	
			<!-- Testimonial #3 Ends -->
			<!-- Testimonials Ends -->
			</div>
		<!-- Primary Content Ends -->
		</div>
	</div>
<!-- Main Container Ends -->

		@stop