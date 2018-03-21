@extends('layouts.admin')
	@include('alerts.success')
	@section('content')

	      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
	            <div class="box-header">
              <h3 class="box-title">lista de Productos</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>

	<div class="box-body table-responsive no-padding">
       <table class="table table-hover">
			<thead>
				<th>Codigo</th>
				<th>Imagen</th>
				<th>marca</th>
				<th>Slug</th>
				<th>modelo</th>
				<th>stock</th>
				<th>precio normal</th>
				<th>descripcion</th>
				<th >ficha tecnica</th>
				<th>diagrama</th>
				<th>categoria</th>
				<th>Operaciones</th>
			</thead>
			@foreach($productos as $producto)
				<tbody>
				    <td>{{$producto->codigop}}</td>
				    <td>
						<img src="imagenes/{{$producto->imagen}}" alt="" style="width:100px;"/>
					</td>
				    <td>{{$producto->marca}}</td>
				    <td>{{$producto->slug}}</td>
					<td>{{$producto->modelo}}</td>
					<td>{{$producto->stock}}</td>
					<td>{{$producto->precios}}</td>
					<td>{{$producto->descrip}}</td>
					<td>{{$producto->ficha}}</td>
					<td>
						<img src="imagenes/{{$producto->diagrama}}" alt="" style="width:100px;"/>
					</td>
					<td>{{$producto->categoria}}</td>
					<td>
				{!!link_to_route('product.edit', $title = 'Editar', $parameters = $producto->id, $attributes = ['class'=>'btn btn-primary'])!!}
				    </td>
				</tbody>
			@endforeach
		</table>
		</div>
		</div>
	</div>
	</div>
	@endsection