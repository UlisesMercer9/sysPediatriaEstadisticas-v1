@extends('layouts.doctor')

@section('content')
<div class="container ">
  <ol class="breadcrumb col-lg-3">
    <li ><a href="{!!URL::to('/especialista')!!}">Inicio</a></li>
    <li > Mi Cuenta </li>
  </ol>
</div>

<div class="row col-lg-12">
                    <div class="margin">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong><i class="fa fa-user-md"></i> Especialista</strong></h3>
                            </div>
                            <div class="panel-body">
                               @include('alerts.request')

                                 <div class="container-fluid">

                                 {!!Form::model($especialista,['route'=>['especialista.update',$especialista->id],'method'=>'PUT','id'=>'EspeUpdateForm','files'=>true])!!}
                                 <div class="form-group col-lg-4">
                                   {!!Form::label('Nombre:')!!}
                                   {!!Form::text('nombre',null,['id'=>'nombre', 'class'=>'form-control ','placeholder'=>'Ingrese su Nombre'])!!}
                                 </div>
                                  <div class="form-group col-lg-4">
                                       {!!Form::label('Apellido(s):')!!}
                                       {!!Form::text('apellidos',null,['id'=>'apellidos', 'class'=>'form-control ','placeholder'=>'Ingrese sus Apellidos'])!!}
                                 </div>
                                 <div class="form-group col-lg-4">
                                       {!!Form::label('Cedula Profesional:')!!}
                                       {!!Form::text('cedula',null,['id'=>'cedula', 'class'=>'form-control ','placeholder'=>'Ingrese su Cedula Profesional'])!!}
                                 </div>

                                 <div class="clearfix"></div>

                                 <div class="form-group col-lg-4">
                                     {!!Form::label('E-mail:')!!}
                                     {!!Form::text('email',null,['id'=>'email','class'=>'form-control','placeholder'=>'Ingresa su correo electronico'])!!}
                                 </div>
                                 <div class="form-group col-lg-4">
                                     {!!Form::label('Password:')!!}
                                     {!!Form::password('password',['id'=>'password','class'=>'form-control','placeholder'=>'Ingrese su contraseña'])!!}
                                 </div>
                                 <div class="form-group col-lg-4">
                                  {!!Form::label('Repita Password:')!!}
                                  {!!Form::password('nul',['id'=>'nul','class'=>'form-control ','placeholder'=>'Repita la contraseña del usuario'])!!}
                                 </div>

                                 <div class="clearfix"></div>

                                 <div class="form-group  col-lg-6">
                                     {!!Form::label('Especialidad:')!!}
                                     {!!Form::text('especialidad',null,['id'=>'especialidad','class'=>'form-control','placeholder'=>'Ingresa su Especialidad'])!!}
                                 </div>
                                 <div class="form-group  col-lg-6">
                                     {!!Form::label('Organizacion Perteneciente:')!!}
                                     {!!Form::text('organizacion',null,['id'=>'organizacion','class'=>'form-control','placeholder'=>'Ingrese el nombre de su organizacion donde labora'])!!}
                                 </div>

                                 <div class="clearfix"></div>

                                 <div class="form-group col-lg-6">
                                     {!!Form::label('Estado:')!!}
                                     {!!Form::select('estado',$states,null,['id'=>'estado','class'=>'form-control','placeholder'=>'Seleccione el estado'])!!}
                                 </div>
                                 <div class="form-group col-lg-6">
                                     {!!Form::label('Ciudad:')!!}
                                     {!!Form::text('ciudad',null,['id'=>'ciudad','class'=>'form-control','placeholder'=>'Ingrese la ciudad' ])!!}
                                 </div>

                                 <div class="clearfix"></div>

                                 <div class="form-group col-lg-6">
                                     {!!Form::label('Localidad:')!!}
                                     {!!Form::text('localidad',null,['id'=>'localidad','class'=>'form-control','placeholder'=>'Ingrese la Localidad ' ])!!}
                                 </div>

                                 <div class="form-group col-lg-6">
                                     {!!Form::label('Codigo Postal:')!!}
                                     {!!Form::text('postal',null,['id'=>'postal','class'=>'form-control','placeholder'=>'Ingrese su codigo postal'])!!}
                                 </div>

                                 <div class="clearfix"></div>

                                 <div class="form-group col-lg-4">
                                  {!!Form::label('Imagen de Perfil:')!!}
                                  {!!Form::file('path',null,['id'=>'path','class'=>'form-control ','placeholder'=>'suba una imagen png o jpg'])!!}
                                 </div>

                                 <div class="clearfix"></div>
                                 {!!Form::close()!!}
                                 </div>
                            </div>
                            <div class="panel-footer"> </div>
                        </div>
                    </div>
       </div>

       <section class=" connectedSortable">

        </section><!-- /.content -->
        <section class=" connectedSortable">

         </section><!-- /.content -->
         <section class=" connectedSortable">

          </section><!-- /.content -->


@stop
