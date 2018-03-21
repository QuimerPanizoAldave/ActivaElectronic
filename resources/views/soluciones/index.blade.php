@extends('layouts.admin')
	@include('alerts.success')
	@section('content')

	      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
	            <div class="box-header">
              <h3 class="box-title">lista de soluciones</h3>

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
				<th>slug</th>
				<th>nombre</th>
				<th>descripcion</th>
				<th>imagen</th>

				<th>Operaciones</th>
			</thead>
			@foreach($soluciones as $soluciones)
				<tbody>
				    <td>{{$soluciones->slug}}</td>
				 
				    <td>{{$soluciones->nombre}}</td>
					<td>{{$soluciones->descripcion}} </td>
				   <td>
						<img src="imagenes/{{$soluciones->imagen}}" alt="" style="width:100px;"/>
					</td>

					<td>
				{!!link_to_route('soluciones.edit', $title = 'Editar', $parameters = $soluciones->id, $attributes = ['class'=>'btn btn-primary'])!!}
				    </td>
				</tbody>
			@endforeach

		</table>
		</div>
		</div>
	</div>
	</div>
	@endsection