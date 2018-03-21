@extends('layouts.admin')
	@section('content')
		@include('alerts.request')
		
		{!!Form::model($producto,['route'=> ['product.update',$producto->id],'method'=>'PUT','files' => true])!!}
			@include('product.forms.producto')
			{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['product.destroy',$producto->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Eliminar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection