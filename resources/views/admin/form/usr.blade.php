
     <div class="form-group col-lg-6">
     	{!!Form::label('Nombre:')!!}
     	{!!Form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Ingrese el Nombre del usuario'])!!}
     </div>
     <div class="form-group col-lg-6">
     	{!!Form::label('Correo:')!!}
     	{!!Form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Ingresa el Email del usuario'])!!}
     </div>
      <div class="clearfix"></div>
     <div class="form-group col-lg-6">
     	{!!Form::label('Password:')!!}
     	{!!Form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'Ingrese la contraseña del usuario'])!!}
     </div>
     <div class="form-group col-lg-6">
     	{!!Form::label('Repita Password:')!!}
      {!!Form::password('nul',['id'=>'nul','class'=>'form-control ','placeholder'=>'Repita la contraseña del usuario'])!!}
     </div>
     <div class="clearfix"></div>

     <div class="form-group col-lg-4">
     	{!!Form::label('Imagen de Perfil:')!!}
      {!!Form::file('path',null,['id'=>'path','class'=>'form-control ','placeholder'=>'suba una imagen png o jpg'])!!}
     </div>

     <div class="clearfix"></div>
