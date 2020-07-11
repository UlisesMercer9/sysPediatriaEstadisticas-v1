 @extends('layouts.principal')

 @section('content')

 <section id="sectionAreaInfantil" class="container" >
        <div class="row">

      <article class="col-md-4 " id="articulolist">
       <div class="panel-group" id="accordion" role="tablist">
         <div class= "panel panel">

              <div class="panel-heading panel-header" role="tab" id="heading0">
              <h4 class="panel-title">
                  <a href="#collapse0"  data-toggle="collapse" data-parent="#accordion">
                    <center>AREA INFANTIL</center>
                  </a>
                </h4>
               </div>

             <div class="panel-heading" role="tab" id="heading1">
              <h4 class="panel-title">
                  <a href="#collapse1"  data-toggle="collapse" data-parent="#accordion">
                    TEMA 1
                  </a>
                </h4>
               </div>

               <div id="collapse1" class="panel-collapse collapse ">
                <div class="panel-body">
                  TEMA 1.1
                </div>
                <div class="panel-body">
                  TEMA 1.2
                </div>
                   <div class="panel-body">
                  TEMA 1.3
                </div>
               </div>

               <div class="panel-heading" role="tab" id="heading2">
                 <h4 class="panel-title">
                  <a href="#collapse2"  data-toggle="collapse" data-parent="#accordion">
                    TEMA 2
                  </a>
                 </h4>
               </div>

               <div id="collapse2" class="panel-collapse collapse ">
                <div class="panel-body">
                  TEMA 2.1
                </div>
                <div class="panel-body">
                  TEMA 2.2
                </div>
                <div class="panel-body">
                  TEMA 2.3
                </div>
               </div>

                <div class="panel-heading" role="tab" id="heading3">
                 <h4 class="panel-title">
                  <a href="#collapse3"  data-toggle="collapse" data-parent="#accordion">
                    TEMA 3
                  </a>
                 </h4>
               </div>

               <div id="collapse3" class="panel-collapse collapse ">
                <div class="panel-body">
                  TEMA 3.1
                </div>
                <div class="panel-body">
                  TEMA 3.2
                </div>
                <div class="panel-body">
                  TEMA 3.3
                </div>
               </div>

                <div class="panel-heading" role="tab" id="heading4">
                 <h4 class="panel-title">
                  <a href="#collapse4"  data-toggle="collapse" data-parent="#accordion">
                    TEMA 4
                  </a>
                 </h4>
               </div>

               <div id="collapse4" class="panel-collapse collapse ">
                <div class="panel-body">
                  TEMA 4.1
                </div>
                <div class="panel-body">
                  TEMA 4.2
                </div>
                <div class="panel-body">
                  TEMA 4.3
                </div>
               </div>

                <div class="panel-heading" role="tab" id="heading5">
                 <h4 class="panel-title">
                  <a href="#collapse5"  data-toggle="collapse" data-parent="#accordion">
                    TEMA 5
                  </a>
                 </h4>
               </div>

               <div id="collapse5" class="panel-collapse collapse ">
                <div class="panel-body">
                  TEMA 5.1
                </div>
                <div class="panel-body">
                  TEMA 5.2
                </div>
                <div class="panel-body">
                  TEMA 5.3
                </div>
               </div>

          </div>
         </div>

      </article>

        </div>
    </section>

@stop
