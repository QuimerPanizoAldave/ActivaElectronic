@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		  	{!!Form::open(['route'=>'product.store', 'method'=>'POST','files'=> true])!!}
		  		@include('product.forms.producto')
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection