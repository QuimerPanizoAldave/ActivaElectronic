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
				<th>ver detalle</th>
				<th>eliminar</th>
				<th>fecha</th>
				<th>usuario</th>
				<th>subtotal</th>
				<th>envio</th>
				<th>total</th>
			
			</thead>
			@foreach($orders as $order)
				<tbody>
				  
				    <td><a 
				    href="#"
				    class="btn btn-primary btn-detalle-pedido"
				    data-id="{{ $order ->id }}"
				    data-path="{{ route('admin.order.getItems')}}"
				    data-toggle="modal"
				    data-target="#mymodal"
				    data-token="{{ csrf_token() }}" 
				 >
				 	<i class="fa fa-external-link"></i>
				 </a></td>
				    <td>
				    	{!!Form::open(['route'=>['admin.order.destroy',$order->id]])!!}
				    	<input type="hidden" name="method" value="DELETE">
				    	<button onclick="return confirm('Eliminar registro?')"
                            class="btn btn-danger" 				    	>
                            	<i class="fa fa-trash-o"></i>
                            </button>
                            {!!Form::close() !!}
				    </td>
				    <td> {{ $order->created_at }}</td>
				    <td> {{ $order->user->name."".$order->user->last_name}}</td>
				    <td>${{ number_format($order->subtotal,2) }}</td>
				    <td>${{ number_format($order->shipping,2) }}</td>
					<td>
					<td>${{ number_format($order->subtotal + $order->shipping,2) }}</td>
			
				</tbody>
			@endforeach
		</table>
		</div>
		</div>
	</div>
	</div>
	@endsection