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
                                  text: '<strong>Evolución del Paciente</strong> '
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
                                name: 'Organización perceptual',
                                  data: [
                                       @foreach($analogicos as $analogico)
                                        {{$analogico->organizacion_perceptual}},
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
                              <nav>
                               <ul class="pagination">
                                  <li><a href="#">&laquo;</a></li>
                                  <li class="active"><a href="{{ route ('concepto.detalle5',$analogico->id_infante)}}">1</a></li>
                                  <li><a href="{{ route ('concepto.detalle6',$analogico->id_infante)}}">2</a></li>
                                  <li><a href="{{ route ('concepto.detalle7',$analogico->id_infante)}}">3</a></li>
                                  <li><a href="{{ route ('concepto.detalle8',$analogico->id_infante)}}">4</a></li>
                                  <li><a href="{{ route ('concepto.detalle9',$analogico->id_infante)}}">5</a></li>
                                  <li><a href="{{ route ('concepto.detalle10',$analogico->id_infante)}}">6</a></li>
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

                    </section>
