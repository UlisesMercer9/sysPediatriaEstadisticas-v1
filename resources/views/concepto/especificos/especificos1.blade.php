
<div class="row col-lg-12">
          <div class="margin">
            <div class="panel panel-default">
                <div class="panel-heading">
                  @foreach($conceptos as $concepto)
                 @endforeach
                    <h3 class="panel-title"><strong> <i class="fa fa-child"></i> {!!link_to_route('concepto.show', $title = 'Generales', $parameters = $concepto->id_infante)!!}/Específicos </strong></h3>

                </div>
                <div class="panel-body">
                  @include('alerts.success')

                  @foreach($conceptos as $concepto)
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

                                      @foreach($conceptos as $concepto)
                                      'Test Aplicado en <br> {{ $concepto->fecha_aplicacion_test }}',
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
                                name: 'Numero de Items',
                                  data: [
                                      @foreach($alumnos as $alumno)
                                       {{$alumno->A1}} 
            
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

                               <nav>
                                <ul class="pagination">
                                   <li><a href="#">&laquo;</a></li>
                                   <li class="active"><a href="{{ route ('concepto.detalle1',$concepto->id_infante)}}">1</a></li>
                                   <li><a href="{{ route ('concepto.detalle2',$concepto->id_infante)}}">2</a></li>
                                   <li><a href="{{ route ('concepto.detalle3',$concepto->id_infante)}}">3</a></li>
                                   <li><a href="{{ route ('concepto.detalle4',$concepto->id_infante)}}">4</a></li>
                                   <li class="bg-primary"><a href="#">&raquo;</a></li>
                                 </ul>
                               </nav>
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
