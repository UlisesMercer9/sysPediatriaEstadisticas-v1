
     <div class="form-group col-lg-4">
     	{!!Form::label('Nombre:')!!}
     	{!!Form::text('nombre',null,['id'=>'nombre','class'=>'form-control ','placeholder'=>'Ingrese el Nombre del tutor'])!!}
     </div>
     <div class="form-group col-lg-4">
     	{!!Form::label('Apellido:')!!}
     	{!!Form::text('apellido',null,['id'=>'apellido','class'=>'form-control','placeholder'=>'Ingresa el Apellido del tutor'])!!}
     </div>
      <div class="form-group col-lg-4">
     	{!!Form::label('Paciente:')!!}
     	<input type="text" name="searchname" id="searchname" class="form-control" placeholder="Introduzca el nombre del paciente">
     </div>

     <div class="clearfix"></div>

      <div class="form-group col-lg-4">
     	{!!Form::label('Correo:')!!}
     	{!!Form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Ingresa el Email del tutor '])!!}
     </div>
     <div class="form-group col-lg-4">
     	{!!Form::label('Password:')!!}
     	{!!Form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'Ingrese la Contraseña del tutor'])!!}
     </div>
     <div class="form-group col-lg-4">
      {!!Form::label('Repita Password:')!!}
      {!!Form::password('nul',['id'=>'nul','class'=>'form-control ','placeholder'=>'Repita la contraseña del usuario'])!!}
     </div>

      <div class="clearfix"></div>

      <div class="form-group col-lg-4">
     	{!!Form::label('Telefono:')!!}
     	{!!Form::text('telefono',null,['id'=>'telefono','class'=>'form-control ','placeholder'=>'Ingrese el numero Telefonico del tutor'])!!}
     </div>
     <div class="form-group col-lg-4">
    {!!Form::label('Estado:')!!}
    {!!Form::select('estado',$states,null,['id'=>'estado','class'=>'form-control','placeholder'=>'Seleccione el estado'],['id'=>'estado'], ['name'=>'estado'])!!}
    </div>
    <div class="form-group col-lg-4">
    {!!Form::label('Ciudad:')!!}
    {!!Form::select('ciudad',['placeholder'=>'ingrese una ciudad'],null,['id'=>'ciudad','class'=>'form-control'])!!}
    </div>

      <div class="clearfix"></div>

     <div class="form-group col-lg-6">
          {!!Form::label('Localidad:')!!}
          {!!Form::text('localidad',null,['id'=>'localidad','class'=>'form-control','placeholder'=>'Ingresa la Localidad del infante'])!!}
     </div>
     <div class="form-group col-lg-6">
          {!!Form::label('Codigo Postal:')!!}
          {!!Form::text('postal',null,['id'=>'postal','class'=>'form-control','placeholder'=>'Ingresa el codigo postal'])!!}
          {!!Form::hidden('id_especialista',Auth::especialista()->get()->id)!!}
     </div>
     <div class="clearfix"></div>

     <div class="clearfix"></div>

     <div class="form-group col-lg-4">
       {!!Form::label('Imagen de Perfil:')!!}
      {!!Form::file('path',null,['id'=>'path','class'=>'form-control ','placeholder'=>'suba una imagen png o jpg'])!!}
     </div>

     <div class="clearfix"></div>

     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

     <script   src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"   integrity="sha256-DI6NdAhhFRnO2k51mumYeDShet3I8AKCQf/tf7ARNhI="   crossorigin="anonymous"></script>

<script type="text/javascript">


       $('#estado').on('change',function(e){
          console.log(e);

          var esta_id = e.target.value;

          $.get('/ajax-ciudad?esta_id=' + esta_id, function(data){

               $('#ciudad').empty();
               $.each(data, function(index, estaObj){

                $('#ciudad').append('<option value="' + estaObj.name +'">'+estaObj.name+'</option>');
         
               });
          });

       }); 




</script>
