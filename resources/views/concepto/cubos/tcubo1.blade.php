@extends('layouts.doctor')

@section('content')

@foreach($cubos as $cubo)
@endforeach

<div class="container ">
  <ol class="breadcrumb col-lg-3">
    <li ><a href="{!!URL::to('/infante')!!}">Inicio</a></li>
    <li > Resultados </li>
  </ol>
</div>


<div class="row col-lg-12">
         <div class="margin">
           <div class="panel panel-default">
               <div class="panel-heading">
                   <h3 class="panel-title"><strong> <i class="fa fa-child"></i>   Generales / {!!link_to_route('concepto.edit', $title = 'Específicos', $parameters = $cubo->id_infante)!!}</strong></h3>
               </div>
                         <div class="panel-body">
                         @include('alerts.success')

                      
                      
                         <div class='container-fluid cold-lg-12' id="container3">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style type="text/css">
${demo.css}
    </style>
    <script type="text/javascript">
    $(function () {
        $('#container3').highcharts({
          chart: {
              type: 'column'
          },
          title: {
              text: '<strong> Test Cubos </strong> <br> Aplicado en {{$cubo->fecha_aplicacion_test}} <br> Hora de inicio del Test {{$cubo->tiempo_de_inicio}} <br>'
          },
          subtitle: {
              text: ' Item No.{{$cubo->numero_de_item_1}}<br>Tiempo limite {{$cubo->tiempo_limite_1}}<br>Diseño correcto {{$cubo->diseño_correcto_1}} '

          },
          xAxis: {
              type: 'category',
              labels: {
                  rotation: -45,
                  style: {
                      fontSize: '13px',
                      fontFamily: 'Verdana, sans-serif'
                  }
              }
          },
          yAxis: {
              min: 0,
              title: {
                  text: 'tiempo de ejecución en {{$cubo->tiempo_de_ejecucion_1}}'
              }
          },
          legend: {
              enabled: false
          },
          tooltip: {
              pointFormat: ''
          },
         series: [{
             name: 'Population',
             data: [
              ['<a href="{{ route ('concepto.detalle11',$cubo->id_infante)}}">numero de intentos</a>', {{$cubo->numero_de_intentos_1}}],
              ['<a href="{{ route ('concepto.detalle12',$cubo->id_infante)}}">numero de rotaciones</a>', {{$cubo->numero_de_rotaciones_1}}],
              ['<a href="{{ route ('concepto.detalle13',$cubo->id_infante)}}">puntaje individual</a>', {{$cubo->puntaje_1}}],


             ],
         dataLabels: {
             enabled: true,
             rotation: -90,
             color: '#FFFFFF',
             align: 'right',
             format: '{point.y:.1f}', // one decimal
             y: 10, // 10 pixels down from the top
             style: {
                 fontSize: '13px',
                 fontFamily: 'Verdana, sans-serif'
             }
         }
     }]
   });
   });

     </script>
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
           
@endsection
