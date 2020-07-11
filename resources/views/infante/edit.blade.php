@extends('layouts.doctor')

@section('content')
<div class="container ">
  <ol class="breadcrumb col-lg-3">
    <li ><a href="{!!URL::to('/infante')!!}">Inicio</a></li>
    <li > Modificar paciente </li>
  </ol>
</div>
<div class="row col-lg-12">
                    <div class="margin">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong> <i class="fa fa-child"></i> Paciente</strong></h3>
                            </div>
                            <div class="panel-body">
                                 @include('alerts.request')

                               <section id="sectionAdmin" class="container-fluid">
                               <div class="row">

                                       {!!Form::model($infante,['route'=>['infante.update',$infante->id],'method'=>'PUT','id'=>'infanteUpdateForm','files'=> true])!!}

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

          {!!Form::select('ciudad',$towns,['placeholder'=>'ingrese una ciudad'],['id'=>'ciudad','class'=>'form-control'])!!}   
          
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




                                        <div class="clearfix"></div>
                                       <br>
                                       <br>
                                       <div class="col-lg-3">
                                         <br>
                                         {!!Form::submit('Guardar',['class'=>'btn btn-success btn-block col-lg-4', 'onclick'=>'return confirm("¿Seguro que deseas editar este registro?")'])!!}
                                       </div>
                                       {!!Form::close()!!}


                               </div>
                               </section>

                            </div>
                              <div class="panel-footer"></div>
                        </div>
                    </div>
                </div>
                <section class=" connectedSortable">

                 </section><!-- /.content -->
                 <section class=" connectedSortable">

                  </section><!-- /.content -->
@stop
