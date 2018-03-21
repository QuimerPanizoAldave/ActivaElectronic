@extends('layouts.principal')

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
					<li class="active">Politicas de Garantia</li>
				</ol>
			<!-- Breadcrumb Ends -->
		

			<!-- Testimonials Starts -->
				<h2 class="sub-heading text-center">
					POLITICAS DE GARANTIA
				</h2>
			<!-- Testimonial #1 Starts -->
				
					<div class="bs-callout bs-callout-success">
                        <h4>TERMINOS DE GARANTIA</h4>
                           
1. SUPRA SOLUCIONES SAC. otorga a sus clientes un Periodo de Garantía en sus productos según la Lista de Precios vigente al momento de la compra del mismo, expresado en: Meses O Años.</br>
2. La Garantía de los equipos cubre los Defectos de Fabricación, que afecten el buen funcionamiento de los mismos.</br>
3. Los equipos que se encuentren dentro del Periodo de Garantía que presenten algún desperfecto en cualquier modelo y marca, deberán tener previa inspección y diagnóstico de Servicio Técnico para validar la Garantía por defecto de fábrica.</br>
4. El plazo estimado para cubrir un equipo por defecto de fábrica dentro del Periodo de Garantía es de 7 dias laborales con incio de dia LUNES y fin de semana el dia VIERNES.</br>
5. SUPRA SOLUCIONES SAC. brinda soporte por sus servicios tecnicos de acuerdo a los paquetes de servicio optenidos por el usuario.</br>
5.1.Nuestros paquetes de servico son: 1 MES ; 3 MESES ; 6 MESES; 12 MESES. </br>
                    </div>

			<!-- Testimonial #1 Ends -->
			<!-- Testimonial #2 Starts -->
					
					<div class="bs-callout bs-callout-info">
  <h4>CONDICIONES DE GARANTIA</h4>
   1. Para proceder a cubrir la garantía, los equipos que ingresan a Servicio Técnico deben contar con lo siguiente: (Garantía ACTIVA)
El equipo debe contar con el código serial, para efectuar su validación de garantía con el lector de barras. En casos excepcionales, si el equipo no lleva el código serial, el cliente debe acompañar su reclamo de garantía con la Nota de Venta respectiva, para efectuar su validación.</br>
2. Quedan fuera de garantía los equipos dañados por causas externas en los siguientes casos: (Garantía Técnica)
El mal uso, mala instalación, modificación de equipos, intervenciones o reparaciones, por personal no calificado y autorizado. Variaciones de voltaje, cortes eléctricos, descargas eléctricas, caída de rayos, estáticas, sobrecargas. Cuando presenten daños físicos causados por: roturas, golpes, quemaduras, líquidos, siniestros. Instalaciones en condiciones inapropiadas: humedad, calor, polvo, ambiente corrosivo, falta de aterramiento, falta de supresor/estabilizador de corriente, cables o conectores mutilados. Sin etiquetas, sin sellos de garantía o violados, números de serie borrados. Daños por catástrofes climáticas: terremotos, inundaciones, sismos, incendios, etc. Daños por periféricos y/o accesorios. 
</div>
				
			
			<!-- Testimonial #2 Ends -->
			<!-- Testimonial #3 Starts -->
<div class="bs-callout bs-callout-warning">
  <h4>ENVIO DE EQUIPOS A SERVICIO TECNICO</h4>

Todo envío de equipos a Servicio Técnico para revisión por garantía, fallas o reparación deberá ser cubierto por el cliente.</br>
Llenar formulario de SOPORTE con datos del cliente y del equipo a ser enviado para su revisión y/o reparación en Servicio Técnico.</br>
Informar mediante correo a Servicio Técnico el envío del equipo con elformulario de SOPORTE correspondiente.</br>
Una vez recibido el equipo en Servicio Técnico, se procederá con la revisión del mismo y se notificará en un lapso de 48 horas indicando si aplica la Garantía en el equipo por Defecto de Fábrica, o si se encuentra Fuera de Garantía por lo que tendrá un costo de revisión o reparación.</br>
Servicio Técnico no se responsabiliza por la pérdida de información guardada en los equipos.</br>
Una vez revisado o reparado el equipo será enviado devuelta al cliente por medio terrestre PAGADO si el equipo está en Garantía y POR PAGAR si está Fuera de Garantía.</br>

</div>	
			<!-- Testimonial #3 Ends -->
		<!-- Testimonial #4 Starts -->
<div class="bs-callout bs-callout-primary">
  <h4>SUPRA SOLUCIONES SAC NO SE RESPONSABILIZA POR:</h4>


Cuando el medio transportador no traslade la carga en la fecha prevista por falta ajenos a nuestra voluntad.</br>
Maltrato de la carga o pérdida de equipos, Fuera de nuestros puntos de atencion.</br>
Recordamos a nuestros usuarios que SUPRA SOLUCIONES SAC. no realiza cambios ni devoluciones por ende recomendamos verificar antes de la aprobacion de la compra detalles del equipo a comprar.</br>


</div>	
			<!-- Testimonial #4 Ends -->

		<!-- Testimonial #5 Starts -->
<div class="bs-callout bs-callout-danger">
  <h4>RECOMENDACIONES PARA UN USO CORRECTO:</h4>

Es importante que los equipos sean instalados en un sitio que cumpla con las condiciones ambientales óptimas, así como las sugeridas por el Fabricante.</br>
Revisar que el suministro de energía al equipo sean óptimos (fase, neutro y tierra) dentro de los parámetros requeridos por el equipo.</br>
Revisar el correcto aterramiento de los equipos, para prolongar la vida de los mismos.</br>
Realizar mantenimientos preventivos a los equipos instalados y llevar un registro de los mismos.</br>



</div>	
			<!-- Testimonial #5 Ends -->
			<!-- Testimonials Ends -->
			</div>
		<!-- Primary Content Ends -->
		</div>
	</div>
<!-- Main Container Ends -->

		@stop