
<div class="form-group">
	{!!Form::label('slug','Slug:')!!}
	{!!Form::text('slug',null,['class'=>'class="col-xs-6 col-md-4"', 'placeholder'=>'Ingresa el slug'])!!}
</div>
<div class="form-group">
	{!!Form::label('nombre','nombre:')!!}
	{!!Form::text('nombre',null,['class'=>'class="col-xs-6 col-md-4"', 'placeholder'=>'Ingresa el Modelo'])!!}
</div>

<div class="form-group">
	{!!Form::label('decripcion','descripcion:')!!}
	{!!Form::text('descripcion',null,['class'=>'form-control', 'placeholder'=>'Ingresa la descripcion'])!!}
</div>

<div class="form-group">
	{!!Form::label('imagen1','imagen:')!!}
	{!!Form::file('imagen')!!}
</div>
