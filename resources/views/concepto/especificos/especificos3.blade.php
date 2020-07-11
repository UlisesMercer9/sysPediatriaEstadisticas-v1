<div class="row col-lg-12">
          <div class="margin">
            <div class="panel panel-default">
                <div class="panel-heading">
                  @foreach($cubos as $cubo)
                  @endforeach
                    <h3 class="panel-title"><strong> <i class="fa fa-child"></i> {!!link_to_route('concepto.show', $title = 'Generales', $parameters = $cubo->id_infante)!!}/Específicos </strong></h3>

                </div>
                        <div class="panel-body">
                          @include('alerts.success')
                          @foreach($cubos as $cubo)
                              <div class='container-fluid cold-lg-12' id="container5">
                              <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
                                <style type="text/css">
                                  ${demo.css}
                                </style>
                                      <script type="text/javascript">
                                      $(function () {
                                            $('#container5').highcharts({
                                            chart: {
                                                type: 'line'
                                            },
                                            title: {
                                                text: ' <strong> Item No.{{$cubo->numero_de_item_1}} </strong> '
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
                                              name: 'Puntuación Individual',
                                                data: [
                                                    @foreach($cubos as $cubo)
                                                      {{$cubo->puntaje_1}},
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
                                  <li class="active"><a href="{{ route ('concepto.detalle11',$cubo->id_infante)}}">1</a></li>
                                  <li><a href="{{ route ('concepto.detalle12',$cubo->id_infante)}}">2</a></li>
                                  <li><a href="{{ route ('concepto.detalle13',$cubo->id_infante)}}">3</a></li>
                                  <li><a href="{{ route ('concepto.detalle14',$cubo->id_infante)}}">4</a></li>
                                  <li><a href="{{ route ('concepto.detalle15',$cubo->id_infante)}}">5</a></li>
                                  <li><a href="{{ route ('concepto.detalle16',$cubo->id_infante)}}">6</a></li>
                                  <li><a href="{{ route ('concepto.detalle17',$cubo->id_infante)}}">7</a></li>
                                  <li><a href="{{ route ('concepto.detalle18',$cubo->id_infante)}}">8</a></li>
                                  <li><a href="{{ route ('concepto.detalle19',$cubo->id_infante)}}">9</a></li>
                                  <li><a href="{{ route ('concepto.detalle20',$cubo->id_infante)}}">10</a></li>
                                  <li><a href="{{ route ('concepto.detalle21',$cubo->id_infante)}}">11</a></li>
                                  <li><a href="{{ route ('concepto.detalle22',$cubo->id_infante)}}">12</a></li>
                                  <li><a href="{{ route ('concepto.detalle23',$cubo->id_infante)}}">13</a></li>
                                  <li><a href="{{ route ('concepto.detalle24',$cubo->id_infante)}}">14</a></li>
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
