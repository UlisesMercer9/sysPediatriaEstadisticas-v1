    <div class="form-group col-lg-4">
     	{!!Form::label('Nombre:')!!}
     	{!!Form::text('nombre',null,['class'=>'form-control ','placeholder'=>'Ingrese el Nombre del Infante'])!!}
     </div>
     <div class="form-group col-lg-4">
     	{!!Form::label('Apellido:')!!}
     	{!!Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Ingresa el Apellido del Infante'])!!}
     </div>
      <div class="form-group col-lg-4">
          {!!Form::label('Edad:')!!}
          {!!Form::text('edad',null,['class'=>'form-control','placeholder'=>'Ingresa la edad del Infante'])!!}
     </div>

     <div class="clearfix"></div>

      <div class="form-group col-lg-4">
          {!!Form::label('Sexo:')!!} &nbsp;
          <br>
          {!!Form::label('Masculino:')!!}
          {!!Form:: radio ("sexo", "masculino")!!} &nbsp;&nbsp;
           {!!Form::label('Femenino:')!!}
          {!!Form:: radio ("sexo", "femenino")!!}

     </div>
     <div class="form-group col-lg-4">
       {!!Form::label('Estado:')!!}
       {!!Form::select('estado',$states,null,['id'=>'estado','class'=>'form-control','placeholder'=>'Seleccione el estado'],['id'=>'estado'], ['name'=>'estado'])!!}
     </div>

   

     <div class="form-group col-lg-4">
          {!!Form::label('Ciudad:')!!}  
          {!!Form::select('ciudad',['placeholder'=>'ingrese una ciudad'], null,['id'=>'ciudad','class'=>'form-control'])!!}   
          
     </div>

     <div class="clearfix"></div>

     <div class="form-group col-lg-6">
          {!!Form::label('Localidad:')!!}
          {!!Form::text('localidad',null,['class'=>'form-control','placeholder'=>'Ingresa la Localidad del infante'])!!}
     </div>
     <div class="form-group col-lg-6">
          {!!Form::label('Codigo Postal:')!!}
          {!!Form::text('postal',null,['class'=>'form-control','placeholder'=>'Ingresa el codigo postal'])!!}
          {!!Form::hidden('id_especialista',Auth::especialista()->get()->id)!!}
     </div>

     <div class="clearfix"></div>


     <div class="clearfix"></div>

     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
     
     

<script>

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
