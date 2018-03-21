              <div class="form-group">
	          {!!Form::label('Nombre:',null,['for'=>'inputname','class'=>'col-sm-2 control-label'])!!}
	          <div class="col-sm-12">
	          {!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Ingresa su nombre'])!!}	
	          </div>
	           </div>


              <div class="form-group">
	          {!!Form::label('Correo:',null,['for'=>'inputEmail3','class'=>'col-sm-2 control-label'])!!}
	          <div class="col-sm-12">
	          {!!Form::text('email',null,['class'=>'form-control','placeholder'=>'Ingresa su email'])!!}	
	          </div>
              </div>

               <div class="form-group">
	          {!!Form::label('Telefono:',null,['for'=>'inputFono','class'=>'col-sm-2 control-label'])!!}
	          <div class="col-sm-12">
	          {!!Form::text('telefono',null,['class'=>'form-control','placeholder'=>'Ingresa su Telefono'])!!}	
	          </div>
              </div>

              <div class="form-group">
	           {!!Form::label('foto1','foto:',['class'=>'col-sm-2 control-label'])!!}
	           {!!Form::file('foto',['class'=>'form-control'])!!}
              </div>

              <div class="form-group">
	          {!!Form::label('Contraseña:',null,['for'=>'inputPassword3','class'=>'col-sm-2 control-label'])!!}
	          <div class="col-sm-12">
	          {!!Form::password('password',['class'=>'form-control','placeholder'=>'Ingresa su Contraseña'])!!}	
	          </div>
              </div>
              
        