@extends('layouts.admin')

	@section('content')
	{!!Form::open()!!}
	<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    		<strong> Genero Agregado Correctamente.</strong>
		</div>

    	<div id="msj-error" class="alert alert-success alert-dismissible" role="alert" style="display:none">
    		<strong id="msj"> Genero Agregado Correctamente.</strong>
		</div>

		<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
		@include('categori.form.categoria')
		{!!link_to('#', $title='Registrar', $attributes = ['id'=>'registro', 'class'=>'btn btn-primary'], $Secure = null)!!}

	{!!Form::close()!!}
	@endsection 

	@section('scripts')
		{!!Html::script('js/script.js')!!}
	@endsection