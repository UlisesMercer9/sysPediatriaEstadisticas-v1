@extends('layouts.doctor')



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
                                <h3 class="panel-title"><strong> <i class="fa fa-child"></i> Pacientes</strong></h3>
                            </div>
                            <div class="panel-body">
                              @include('alerts.success')

                                <div class='container-fluid table-responsive'>
                                  <table class="table table-hover table-bordered">
                                    <thead class='success'>
                                      <th>Id</th>
                                      <th>Nombre</th>
                                      <th>Apellidos</th>
                                      <th>Edad</th>
                                      <th>Sexo</th>
                                      <th>Operaciones</th>
                                    </thead>
                                      @foreach($users as $infante)

                                    <tbody>
                                      <td>{{$infante->id}}</td>
                                      <td>{{$infante->nombre}}</td>
                                      <td>{{$infante->apellido}}</td>
                                      <td>{{$infante->edad}}</td>
                                      <td>{{$infante->sexo}}</td>
                                      <td>{!!link_to_route('concepto.show', $title = ' Resultados', $parameters = $infante->id, $attributes = ['class'=>'btn btn-info fa fa-book'])!!}&nbsp;{!!link_to_route('tutor.edit', $title = ' Tutor', $parameters = $infante->id, $attributes = ['class'=>'btn btn-primary fa fa-user-secret'])!!}&nbsp;{!!link_to_route('infante.edit', $title = ' Editar', $parameters = $infante->id, $attributes = ['class'=>'btn btn-success fa fa-pencil-square-o'])!!} &nbsp;<a href="{{ route('infante.destroy', $infante->id) }}" onclick="return confirm('¿Seguro que deseas eliminar este registro?')" class="btn btn-danger fa fa-trash-o "> Eliminar</a></td>
                                    </tbody>
                                    @endforeach

                                  </table>
                                </div>
                            </div>
                              <div class="panel-footer">
                                <strong>Ingresar nuevo paciente</strong> &nbsp;&nbsp; <a href="{!!URL::to('/infante/create')!!}" class="btn btn-circle btn-primary" ><span class="glyphicon glyphicon-plus"></span></a>
                              </div>
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


@endsection
