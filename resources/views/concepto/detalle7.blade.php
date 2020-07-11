@extends('layouts.doctor')

@section('content')
<div class="container ">
  <ol class="breadcrumb col-lg-3">
    <li ><a href="{!!URL::to('/infante')!!}">Inicio</a></li>
    <li ><a href="{!!URL::previous()!!}">Resultados</a></li>
    <li > Especificos </li>
  </ol>
</div>

<div class="row col-lg-12">
          <div class="margin">
            <div class="panel panel-default">
                <div class="panel-heading">
                  @foreach($analogicos as $analogico)
                  @endforeach
                    <h3 class="panel-title"><strong> <i class="fa fa-child"></i> {!!link_to_route('concepto.show', $title = 'Generales', $parameters = $analogico->id_infante)!!}/Específicos </strong></h3>

                </div>
                <div class="panel-body">
                  @include('alerts.success')


                  @foreach($analogicos as $analogico)
                             <div class='container-fluid cold-lg-12' id="container3">
                             <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                               <style type="text/css">
                                 ${demo.css}
                               </style>
                                     <script type="text/javascript">
                                     $(function () {
                                           $('#container3').highcharts({
                                           chart: {
                                               type: 'line'
                                           },
                                           title: {
                                               text: ''
                                           },
                                           xAxis: {
                                               categories: [
                                                 @foreach($analogicos as $analogico)

                                                 'Test Aplicado en <br> {{$analogico->fecha_aplicacion_test}}',

                                                 @endforeach
                                                                ]
                                           },
                                           yAxis: {
                                               title: {
                                                   text: 'Estadìsticas'
                                               }
                                           },
                                           plotOptions: {
                                               line: {
                                                   dataLabels: {
                                                       enabled: true
                                                   },
                                                   enableMouseTracking: false
                                               }
                                           },
                                           series: [{
                                             name: 'Atención a detalles',
                                               data: [
                                                   @foreach($analogicos as $analogico)
                                                     {{$analogico->atencion_a_detalles}},
                                                   @endforeach
                                               ]
                                           }]
                                           });
                                           });


                                     </script>
                                 </div>
                                 @endforeach




                          </div>
                            <div class="panel-footer">

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
