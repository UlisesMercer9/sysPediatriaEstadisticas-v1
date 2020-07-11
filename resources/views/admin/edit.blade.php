@extends('layouts.admin')

@section('content')
<div class="container ">
  <ol class="breadcrumb col-lg-3">
    <li ><a href="{!!URL::to('/admin')!!}">Inicio</a></li>
    <li > Modificar Administrador </li>
  </ol>
</div>


<div class="row col-lg-12">
                    <div class="margin">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong><i class="glyphicon glyphicon-user"></i> Administador</strong></h3>
                            </div>
                            <div class="panel-body">
                                 @include('alerts.request')


                               <div class="row">

		                               {!!Form::model($user,['route'=>['admin.update',$user->id],'method'=>'PUT','id'=>'AdminUpdateForm','files'=>true])!!}
		                               @include('admin.form.usr')
		                               <br>
		                               <br>
                                       <div class="col-lg-3">
                                         <br>
                                         {!!Form::submit('Guardar',['class'=>'btn btn-success btn-block col-lg-4','onclick'=>'return confirm("¿Seguro que deseas editar este registro?")'])!!}
                                       </div>
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



@endsection
