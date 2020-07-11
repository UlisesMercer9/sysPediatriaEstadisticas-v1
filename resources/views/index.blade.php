 @extends('layouts.principal')

 @section('content')

 <!--Aqui va el Slider-->
     <div class="col-md-12 " id="slider">
              <div id="carousel-1" class="carousel slide " data-ride="carousel">  
                <!--Indicadores-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-1" data-slide-to="1"></li>
                  <li data-target="#carousel-1" data-slide-to="2"></li>
                  <li data-target="#carousel-1" data-slide-to="3"></li>
                  <li data-target="#carousel-1" data-slide-to="4"></li>
                </ol>
                
                <!-- Contenedor de los slide -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="img/p1.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption hidden-xs hidden-sm">
                      <h3>Este es nuestro Slide #1</h3>
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/p2.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption hidden-xs hidden-sm">
                      <h3>Este es nuestro Slide #1</h3>
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/p3.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption hidden-xs hidden-sm">
                      <h3>Este es nuestro Slide #1</h3>
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/p4.jpg" class="img-responsive" alt="">
                    <div class="carousel-caption hidden-xs hidden-sm">
                      <h3>Este es nuestro Slide #1</h3>
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                  </div>

                  <div class="item">
                    <img src="img/p5.gif" class="img-responsive" alt="">
                    <div class="carousel-caption hidden-xs hidden-sm">
                      <h3>Este es nuestro Slide #1</h3>
                      <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                  </div>
                </div>
                <!--Controles-->
                <a href="#carousel-1" class="lef carousel-control" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>

                <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
              </div>
          </div>


      <div class="clearfix"></div>
    
    <section id="section2">
      


      
    </section>

@stop    