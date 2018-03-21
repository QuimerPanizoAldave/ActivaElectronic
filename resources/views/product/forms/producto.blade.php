<div class="form-group">


	{!!Form::label('Codigo producto:' ,null,['for'=>'inputcode','class'=>'.col-xs-6 .col-md-4 control-label'])!!}
	{!!Form::text('codigop',null,['class'=>'class="col-xs-6 col-md-4"', 'placeholder'=>'Ingresa el Codigo'])!!}
</div>
<div class="form-group">
	{!!Form::label('imagen1','imagen:')!!}
	{!!Form::file('imagen')!!}
</div>
<div class="form-group">
	{!!Form::label('marca','Marca:')!!}
	{!!Form::text('marca',null,['class'=>'class="col-xs-6 col-md-4"', 'placeholder'=>'Ingresa la Marca'])!!}
</div>
<div class="form-group">
	{!!Form::label('slug','Slug:')!!}
	{!!Form::text('slug',null,['class'=>'class="col-xs-6 col-md-4"', 'placeholder'=>'Ingresa el slug'])!!}
</div>
<div class="form-group">
	{!!Form::label('modelo','modelo:')!!}
	{!!Form::text('modelo',null,['class'=>'class="col-xs-6 col-md-4"', 'placeholder'=>'Ingresa el Modelo'])!!}
</div>

<div class="form-group">
	{!!Form::label('stock','stock:')!!}
	{!!Form::text('stock',null,['class'=>'class="col-xs-6 col-md-4"', 'placeholder'=>'Ingrese el stock'])!!}
</div>

<div class="form-group">
	{!!Form::label('precio','precio final:')!!}
	{!!Form::text('precios',null,['class'=>'class="col-xs-6 col-md-4"', 'placeholder'=>'Ingresa el precio cliente final'])!!}
</div>
<div class="form-group">
	{!!Form::label('decrip','descripcion:')!!}
	{!!Form::text('descrip',null,['class'=>'form-control', 'placeholder'=>'Ingresa la duración'])!!}
</div>

<div class="form-group">
	{!!Form::label('ficha','ficha tecnica:')!!}
	{!!Form::textarea('ficha',null,['class'=>'ckeditor', 'id'=>'', 'cols'=>'30', 'rows'=>'10'])!!}
	
</div>
<div class="form-group">
	{!!Form::label('diagrama1','diagrama:')!!}
	{!!Form::file('diagrama')!!}
</div>
<div class="form-group">
	{!!Form::label('Categoria','categoria:')!!}
	{!!Form::select('categoria_id',$categorias)!!}
</div>