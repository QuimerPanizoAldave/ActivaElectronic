<div class="form-group">
	{!!Form::label('categoria','Nombre: ')!!}
	{!!Form::text('categoria',null, ['id'=>'categoria','class'=>'form-control', 'placeholder' => 'Ingresa el nombre'])!!}
</div> 
<div class="form-group">
	{!!Form::label('slug','Slug: ')!!}
	{!!Form::text('slug',null, ['id'=>'slug','class'=>'form-control', 'placeholder' => 'Ingresa el Slug'])!!}
</div> 
<div class="form-group">
	{!!Form::label('descripcion','Descripcion: ')!!}
	{!!Form::text('descripcion',null, ['id'=>'descripcion','class'=>'form-control', 'placeholder' => 'Ingresa La descripcion'])!!}
</div> 
<div class="form-group">
	{!!Form::label('imagen','imagen:')!!}
	{!!Form::text('imagen',null,['id'=>'imagen','class'=>'form-control', 'placeholder' => 'Ingresa url'])!!}
</div>