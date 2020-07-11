@extends('layouts.admin')

@section('content')
<div class="container ">
  <ol class="breadcrumb col-lg-3">
    <li ><a href="{!!URL::to('/especialista')!!}">Inicio</a></li>
    <li > Nuevo especialista </li>
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

                                 {!!Form::open(['route'=>'especialista.store','method'=>'POST','id'=>'EspeCreateForm','files'=> true])!!}
                                     @include('especialista.form.especialista')
                                     <br>
                                     <div class="col-lg-3">
                                       <br><br>
                                         {!!Form::submit('Agregar',['class'=>'btn btn-success btn-block'])!!}
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
          <section class=" connectedSortable">

           </section><!-- /.content -->
           <section class=" connectedSortable">

            </section><!-- /.content -->




@stop
