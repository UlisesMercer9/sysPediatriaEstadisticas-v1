@extends('layouts.admin')
@section('content')

<div class="container ">
  <ol class="breadcrumb col-lg-3">
    <li class="">Inicio</li>
  </ol>
</div>
<div class="row col-lg-12">
                    <div class="margin">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong><i class="fa fa-user-md"></i> Especialistas</strong></h3>
                            </div>
                            <div class="panel-body">
                                 @include('alerts.success')
                                <div class='container-fluid table-responsive'>
                                  <table class="table table-hover table-bordered">
                                    <thead class='success'>
                                      <th>Cedula</th>
                                      <th>Nombre</th>
                                      <th>Apellidos</th>
                                      <th>Especialidad</th>
                                      <th>Organizacion</th>
                                      <th>Opciones</th>
                                    </thead>
                                     @foreach($users as $especialista)
                                    <tbody>
                                      <td>{{$especialista->cedula}}</td>
                                      <td>{{$especialista->nombre}}</td>
                                      <td>{{$especialista->apellidos}}</td>
                                      <td>{{$especialista->especialidad}}</td>
                                      <td>{{$especialista->organizacion}}</td>
                                      <td>{!!link_to_route('especialista.edit', $title = ' Detalles', $parameters = $especialista->id, $attributes = ['class'=>'btn btn-info fa fa-book'])!!}&nbsp;<a href="{{ route('especialista.destroy', $especialista->id) }}" onclick="return confirm('¿Seguro que deseas eliminar este registro?')" class="btn btn-danger fa fa-trash-o"> Eliminar</a></td>
                                    </tbody>
                                    @endforeach
                                  </table>
                                </div>
                            </div>
                            <div class="panel-footer"><strong>Crear nuevo especialista</strong> &nbsp;&nbsp;<a href="{!!URL::to('/especialista/create')!!}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a></div>
                        </div>
                    </div>
                </div>

                <section class=" connectedSortable">

                 </section><!-- /.content -->

                 <section class=" connectedSortable">

                  </section><!-- /.content -->

                  <section class=" connectedSortable">

                   </section><!-- /.content -->

   @endsection
