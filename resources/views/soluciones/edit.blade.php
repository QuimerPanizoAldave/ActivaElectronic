@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($soluciones,['route'=> ['soluciones.update',$soluciones->id],'method'=>'PUT','files' => true])!!}
			@include('soluciones.forms.solucion')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['soluciones.destroy',$soluciones->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection