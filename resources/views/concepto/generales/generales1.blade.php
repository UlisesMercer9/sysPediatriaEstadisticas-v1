
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
                 @foreach($conceptos as $concepto)
                @endforeach
                   <h3 class="panel-title"><strong> <i class="fa fa-child"></i> Generales</h3>
               </div>
               <div class="panel-body">
                 @include('alerts.success')

                <div class='container-fluid cold-lg-12' id="container">
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                <style type="text/css">
                   ${demo.css}
                       </style>
                       <script type="text/javascript">
                       $(function () {
   $('#container').highcharts({
       chart: {
           type: 'area'
       },
       title: {
           text: '<strong>TEST CONCEPTOS</strong>'
       },
       xAxis: {
           categories: ['<a href="{{ route ('concepto.detalle1',$concepto->id_infante)}}">Numero de items</a>',
           '<a href="{{ route ('concepto.detalle2',$concepto->id_infante)}}">Respuesta fila 1</a>',
           '<a href="{{ route ('concepto.detalle3',$concepto->id_infante)}}">Respuesta fila 2</a>',
           '<a href="{{ route ('concepto.detalle4',$concepto->id_infante)}}">Puntuación</a>']
       },
       credits: {
           enabled: false
       },
       series: [
        @foreach($conceptos as $concepto)
        {
          name: '<font size=1>{{$concepto->fecha_aplicacion_test}} <br> tiempo inicio {{$concepto->tiempo_inicio}} <br> tiempo final {{$concepto->tiempo_total}} </font>',
          data: [
           {{$concepto->numero_de_item}},
           {{$concepto->respuesta_fila_1}},
           {{$concepto->respuesta_fila_2}},
           {{$concepto->puntuacion}},
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
