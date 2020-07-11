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

<div class='container-fluid cold-lg-12' id="container10">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style type="text/css">
${demo.css}
    </style>
    <script type="text/javascript">
    $(function () {
        $('#container10').highcharts({
          chart: {
              type: 'column'
          },
          title: {
              text: ''
          },
          subtitle: {
              text: ' Item No.{{$cubo->numero_de_item_8}}<br>Tiempo limite {{$cubo->tiempo_limite_8}}<br>Diseño correcto {{$cubo->diseño_correcto_8}} '

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
                  text: 'tiempo de ejecución en {{$cubo->tiempo_de_ejecucion_8}}'
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
               ['<a href="{{ route ('concepto.detalle32',$cubo->id_infante)}}">numero de intentos</a>', {{$cubo->numero_de_intentos_8}}],
               ['<a href="{{ route ('concepto.detalle33',$cubo->id_infante)}}">numero de rotaciones</a>', {{$cubo->numero_de_rotaciones_8}}],
               ['<a href="{{ route ('concepto.detalle34',$cubo->id_infante)}}">puntaje individual</a>', {{$cubo->puntaje_8}}],


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


