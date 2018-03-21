<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>SOLICITUd</title>
	</head>
	<body>

        <p><strong>PRODUCTOS A COTIZAR:</strong>
		@foreach ($datacarrito as $cart)
			
			   <td><strong>Modelo:</strong>{{ $cart->modelo}}</td> 	</br>
			   <td><strong>Cantidad:</strong>{{ $cart->cantidad}}</td> 						
	    	
	    @endforeach

        </p>
		<p><strong>Razon social:</strong>{!!$request['razon']!!}</p>
		<p><strong>Ruc:</strong>{!!$request['ruc']!!}</p>
		<p><strong>ciudad:</strong>{!!$request['ciudad']!!}</p>
		<p><strong>Nombre:</strong>{!!$request['name']!!}</p>
		<p><strong>Email:</strong>{!!$request['email']!!}</p>
		<p><strong>Telefono:</strong>{!!$request['telefono']!!}</p>
		<p><strong>Mensaje:</strong>{!!$request['mensaje']!!}</p>
	</body>
</html>