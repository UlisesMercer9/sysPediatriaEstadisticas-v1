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
                  @foreach($cubos as $cubo)
                 @endforeach
                    <h3 class="panel-title"><strong> <i class="fa fa-child"></i>Específicos </strong></h3>

                </div>
                <div class="panel-body">
                  @include('alerts.success')

                  @foreach($cubos as $cubo)
                 <div class='container-fluid cold-lg-12' id="container">
                 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                   <style type="text/css">
                     ${demo.css}
                   </style>
                        <script type="text/javascript">
                        $(function () {
                              $('#container').highcharts({
                              chart: {
                                  type: 'line'
                              },
                              title: {
                                  text: 'Evolución del Paciente '
                              },
                              xAxis: {
                                  categories: [
                                     @foreach($cubos as $cubo)

                                        'Test Aplicado en <br> {{$cubo->fecha_aplicacion_test}}',

                                     @endforeach
                                  ]
                              },
                              yAxis: {
                                  title: {
                                      text: 'Estadísticas'
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
                                name: 'Numero de intentos',
                                  data: [
                                       @foreach($cubos as $cubo)
                                        {{$cubo->numero_de_intentos_12}},

                                       @endforeach
                                  ]
                              }]
                              });
                              });


                        </script>
                    </div>
                @endforeach

            <div class="clearfix"></div>


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