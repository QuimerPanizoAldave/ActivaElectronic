
@extends('layouts.admin')

@section('content')

@include('alerts.success')
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">lista de usuarios</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Telefono</th>
                  <th>Foto</th>
                  <th>Opcion</th>
                </tr>
         @foreach($users as $user)
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->telefono}}</td>
                  <td>
                    <img src="imagenes/{{$user->foto}}" alt="" style="width:100px;"/>  
                  </td>
                  
                  <td>

               {!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-warning'])!!}

                </tr>
        @endforeach
              </table>

              {!!$users->render()!!}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
@stop