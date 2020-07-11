@extends('layouts.doctor')

@section('content')
<div class="container ">
  <ol class="breadcrumb col-lg-3">
    <li ><a href="{!!URL::to('/infante')!!}">Inicio</a></li>
    <li > Tutor del paciente </li>
  </ol>
</div>
<div class="row col-lg-12">
                    <div class="margin">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong><i class="fa fa-user-secret"></i> Tutor </strong></h3>
                            </div>
                             <div class="panel-body">
                               @include('alerts.request')



                                 <div class="container-fluid onload="activar()">

                                 @if( ! empty($tutor))

                                 {!!Form::model($tutor,['route'=>['tutor.update',$tutor->id],'method'=>'PUT','id'=>'tutorCreateForm','files'=> true])!!}

                                 @else

                                 {!!Form::open(['route'=>'tutor.store','method'=>'POST','id'=>'tutorCreateForm','files'=> true])!!}

                                 
                                 <div class="form-group col-lg-12">
                                  {!!Form::label('Paciente:')!!}
                                  {!!Form::select('id_infante',$infantes, null, ['id'=>'id_infante','class'=>'form-control','placeholder'=>'Seleccione al infante'])!!}
                                </div>

                                 @endif

                                 <div class="form-group col-lg-6">
                                     {!!Form::label('Nombre:')!!}
                                     {!!Form::text('nombre', null,['id'=>'nombre','class'=>'form-control','placeholder'=>'Ingresa el nombre del tutor','disabled'])!!}
                                 </div>
                                 <div class="form-group col-lg-6">
                                    {!!Form::label('Apellido:')!!}
                                    {!!Form::text('apellido', null,['id'=>'apellido','class'=>'form-control','placeholder'=>'Ingresa el Apellido del tutor','disabled'])!!}
                                 </div>
                                 <div class="clearfix"></div>

                                 <div class="form-group col-lg-6">
                                     {!!Form::label('Correo:')!!}
                                     {!!Form::text('email', null,['id'=>'email','class'=>'form-control','placeholder'=>'Ingresa el Email del tutor','disabled' ])!!}
                                 </div>
                                 <div class="form-group col-lg-6">
                                     {!!Form::label('Telefono:')!!}
                                     {!!Form::text('telefono', null,['id'=>'telefono','class'=>'form-control ','placeholder'=>'Ingrese el numero Telefonico del tutor','disabled'])!!}
                                 </div>
                                 <div class="clearfix"></div>
                                 <div class="form-group col-lg-6">
                                     {!!Form::label('Estado:')!!}
                                     {!!Form::select('estado',$states,null,['id'=>'estado','class'=>'form-control','placeholder'=>'Seleccione el estado'], ['name'=>'estado'])!!}
                                 </div>
                                  <div class="form-group col-lg-6">
                                      {!!Form::label('Ciudad:')!!}
                                      {!!Form::select('ciudad',$towns,['placeholder'=>'ingrese una ciudad'],['id'=>'ciudad','class'=>'form-control'])!!}
                                  </div>
                                <div class="clearfix"></div>
                                <div class="form-group col-lg-6">
                                    {!!Form::label('Localidad:')!!}
                                    {!!Form::text('localidad', null,['id'=>'localidad','class'=>'form-control','placeholder'=>'Ingresa la Localidad del infante','disabled'])!!}
                                </div>

                                <div class="form-group col-lg-6">
                                    {!!Form::label('Codigo Postal:')!!}
                                    {!!Form::text('postal', null,['id'=>'postal','class'=>'form-control','placeholder'=>'Ingresa el codigo postal','disabled'])!!}
                                    {!!Form::hidden('id_especialista',Auth::especialista()->get()->id)!!}

                                </div>
                                <div class="clearfix"></div>

                                <div class="form-group col-lg-4">
                                 {!!Form::label('Imagen de Perfil:')!!}
                                 {!!Form::file('path',null,['id'=>'path','class'=>'form-control ','placeholder'=>'suba una imagen png o jpg'])!!}
                                </div>
                                
                                <div class="clearfix"></div>

                                     <div class="col-lg-3">
                                       <br>
                                       {!!Form::submit('Guardar',['id'=>'guardar','class'=>'btn btn-success btn-block col-lg-4','disabled'])!!}
                                     </div>
                                     {!!Form::close()!!}

                                     <div class="col-lg-3">
                                       <br>
                                       <button type="button" class="btn btn-primary btn-block col-lg-4" id="editar" onclick=" activar()" >Editar</button>
                                     </div>

                                 </div>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
       </div>

       <section class=" connectedSortable">

        </section><!-- /.content -->

        <section class=" connectedSortable">

         </section><!-- /.content -->
         <section class=" connectedSortable">

          </section><!-- /.content -->

          <section class=" connectedSortable">

           </section><!-- /.content -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript">


function activar() {
  frm = document.forms[0];
  for(i=0; ele = frm.elements[i]; i++)
    ele.disabled = !ele.disabled;
}


       $("#estado").prop("disabled","disabled"); 
       $("#ciudad").prop("disabled","disabled"); 
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






@stop
