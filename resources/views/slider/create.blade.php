@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		  	{!!Form::open(['route'=>'slider.store', 'method'=>'POST','files'=> true])!!}
		  		@include('slider.forms.slideres')
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection