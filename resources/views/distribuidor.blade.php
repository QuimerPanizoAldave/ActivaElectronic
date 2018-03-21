@extends('layouts.principal')

@section('content')
    <!-- Breadcrumbs - START -->
    <div class="breadcrumbs-container">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.html">Inicio</a></li>
          <li class="active">Formulario Distribuidor</li>
        </ol>
      </div>
    </div>
    <!-- Breadcrumbs - END -->

    <!-- Component: login-registration/register-login.html - START -->
    <section class="">
      <div class="container">
        <h1><span>Registrese</span></h1>
        <div class="row">
          <div class="col-sm-7 col-md-offset-1 col-md-6">
            <div class="thumbnail info-thumbnail background-lead color-white">
              <div class="caption">
                <h3><span class="fa fa-user"></span> Formulario de Registro</h3>
                  {!!Form::open(['route'=>'registro.store','method'=>'POST'])!!}
            
                  <div class="form-group">
                  {!!Form::label('name','Nombre o Razon social:',['for' =>'exampleInputName3'])!!}
                 {!!Form::text('name',null,['class' => 'form-control','name' =>'name','id'=>'exampleInputName3','placeholder' => 'Ingrese su Razon social'])!!}
                 </div>
                  <div class="form-group">
                    {!!Form::label('ruc','RUC:',['for' =>'exampleInputSecondName3'])!!}
                    {!!Form::text('ruc',null,['class' => 'form-control','name' =>'ruc','id'=>'exampleInputSecondName3','placeholder' => 'Ingrese su ruc social'])!!}
                  </div>
                  <div class="form-group">
                    {!!Form::label('direccion','Direccion:',['for' =>'exampleInputEmail13'])!!}
                    {!!Form::text('direccion',null,['class' => 'form-control','name' =>'direccion','id'=>'exampleInputEmail13','placeholder' => 'Ingrese Direccion'])!!}
                  </div>
                  <div class="form-group">
                  {!!Form::label('distrito','Distrito:',['for' =>'exampleInputPassword13'])!!}
                  {!!Form::text('distrito',null,['class' => 'form-control','name' =>'distrito','id'=>'exampleInputPassword13','placeholder' => 'Ingrese Distrito'])!!}
                   </div>
                  <div class="form-group">
                    {!!Form::label('departamento','Departamento:',['for' =>'exampleInputPassword23'])!!}
                    {!!Form::text('departamento',null,['class' => 'form-control','name' =>'departamento','id'=>'exampleInputPassword23','placeholder' => 'Ingrese Departamento'])!!}
                  </div>
                    <div class="form-group">
                    {!!Form::label('email','Email:',['for' =>'exampleInputPassword23'])!!}
                    {!!Form::text('email',null,['class' => 'form-control','name' =>'email','id'=>'exampleInputPassword23','placeholder' => 'Ingrese Email'])!!}
                 </div>
                    <div class="form-group">
                    {!!Form::label('telefono','Telefono:',['for' =>'exampleInputPassword23'])!!}
                    {!!Form::text('telefono',null,['class' => 'form-control','name' =>'telefono','id'=>'exampleInputPassword23','placeholder' => 'Ingrese Telefono'])!!}
                  </div>
                    <div class="form-group">
                    {!!Form::label('web','Pagina Web:',['for' =>'exampleInputPassword23'])!!}
                    {!!Form::text('web',null,['class' => 'form-control','name' =>'web','id'=>'exampleInputPassword23','placeholder' => 'Ingrese su Web'])!!}
                  </div>

                  {!!Form::submit('Registrar',['class'=>'btn btn-default'])!!}
                        
                 {!!Form::close()!!}
              </div>
            </div>
          </div>
          <div class="col-sm-5 col-md-4">
            <div class="thumbnail info-thumbnail background-emerald color-white">
              <div class="caption">
             
                <img src="images/ayuda.png" alt="">
                   <h5><span class="glyphicon glyphicon-arrow-left"></span> Complete el formulario de distribuidor</h5>
                <form role="form">
                </form>
              </div>
            </div>
          </div>
        </div>      </div>
    </section>
    <!-- Component: login-registration/register-login.html - END -->
@stop