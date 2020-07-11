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
                            @foreach($analogicos as $analogico)
                            @endforeach
                               <h3 class="panel-title"><strong> <i class="fa fa-child"></i> Generales</h3>
                           </div>
                           <div class="panel-body">
                             @include('alerts.success')

                            <div class='container-fluid cold-lg-12' id="container2">
                            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                            <style type="text/css">
                               ${demo.css}
                                   </style>
                                   <script type="text/javascript">
                                   $(function () {
                                     $('#container2').highcharts({
                                         chart: {
                                             type: 'area'
                                         },
                                         title: {
                                             text: '<strong>TEST ANALÓGICO</strong>'
                                         },
                                         xAxis: {
                                             categories: ['<a href="{{ route ('concepto.detalle5',$analogico->id_infante)}}">Organización perceptual</a>',
                                             '<a href="{{ route ('concepto.detalle6',$analogico->id_infante)}}">Habilidad de razonamiento</a>',
                                             '<a href="{{ route ('concepto.detalle7',$analogico->id_infante)}}">Atención a detalles</a>',
                                             '<a href="{{ route ('concepto.detalle8',$analogico->id_infante)}}">Concentración</a>',
                                             '<a href="{{ route ('concepto.detalle9',$analogico->id_infante)}}">Visión</a>',
                                             '<a href="{{ route ('concepto.detalle95',$analogico->id_infante)}}">Persistencia</a>',
                                             '<a href="{{ route ('concepto.detalle10',$analogico->id_infante)}}">Puntuación escalar</a>']
                                         },
                                         credits: {
                                             enabled: false
                                         },
                                         series: [
                                          @foreach($analogicos as $analogico)
                                          {
                                            name: '<font size=1>{{$analogico->fecha_aplicacion_test}}</font>',
                                            data: [
                                             {{$analogico->organizacion_perceptual}},
                                             {{$analogico->habilidad_de_razonamiento}},
                                             {{$analogico->atencion_a_detalles}},
                                             {{$analogico->concertacion}},
                                             {{$analogico->vision}},
                                             {{$analogico->persistencia}},
                                             {{$analogico->puntuacion_escalar}},
                                           ]},
                                           @endforeach
                                           ]
                                     });
                                  });

                                    </script>

                              </div>


                             </div>
                                <div class="panel-footer">

                              </div>
                          </div>

                               </div>
                           </div>
