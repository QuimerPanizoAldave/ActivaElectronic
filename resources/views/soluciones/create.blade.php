@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		  	{!!Form::open(['route'=>'solucion.store', 'method'=>'POST','files'=> true])!!}
		  		@include('soluciones.forms.solucion')
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection