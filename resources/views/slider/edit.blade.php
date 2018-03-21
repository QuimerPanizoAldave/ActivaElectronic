@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($slider,['route'=> ['slider.update',$slider->id],'method'=>'PUT','files' => true])!!}
			@include('slider.forms.slideres')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['slider.destroy',$slider->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection