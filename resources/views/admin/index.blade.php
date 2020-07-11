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
                                <h2 class="panel-title"><strong><i class="glyphicon glyphicon-user"></i> Administradores </strong></h2>
                            </div>
                            <div class="panel-body">
                                 @include('alerts.success')
                                <div class='container-fluid table-responsive'>
                                  <table class="table table-hover  table-bordered">
                                    <thead class='success'>
                                      <th>Perfil</th>
                                      <th>Nombre</th>
                                      <th>Correo</th>
                                      <th>Opciones</th>
                                    </thead>
                                    @foreach($users as $user)
                                    <tbody>
                                      <td><img src="perfil/{{$user->path}}" class="img-circle" alt="User Image" style="width:50px"></td>
                                      <td>{{$user->name}}</td>
                                      <td>{{$user->email}}</td>
                                      <td>{!!link_to_route('admin.edit', $title = ' Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-success fa fa-pencil-square-o'])!!}&nbsp;<a href="{{ route('admin.destroy', $user->id) }}" onclick="return confirm('¿Seguro que deseas eliminar este registro?')" class="btn btn-danger fa fa-trash-o"></i> Eliminar</a></td>
                                    </tbody>
                                    @endforeach
                                  </table>
                                   {!!$users->render()!!}
                                </div>
                            </div>
                            <div class="panel-footer"><strong>Crear nuevo administrador</strong> &nbsp;&nbsp;<a href="{!!URL::to('/admin/create')!!}" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span></a></div>
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
