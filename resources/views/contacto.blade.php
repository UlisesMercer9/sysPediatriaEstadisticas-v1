@extends('layouts.principal')

@section('content')

<section id="sectionArticulos" class="container row" >
      <div class="clearfix"></div>
      
         
         <article id="articulo1" class="col-md-4 container-fluid">
          <form action="">
            <div class="form-group">
              <h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"> CONTÁCTANOS</h3>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre">
            </div>

             <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
            </div>

             <div class="form-group">
                <label for="mensaje" class="control-label">Mensaje:</label>
                <textarea rows="8" class="form-control" id="mensaje" placeholder="Escribe tu mensaje"></textarea>
            </div>

            <br>
            <button type="button" class="btn btn-danger btn-lg btn-block  ">Limpiar</button>
            <button type="button" class="btn btn-primary btn-lg btn-block  ">Enviar</button>
       
            </div>
          </form>
         </article>

          <article id="articulo2" class="col-md-3 container-fluid" >
            <h3><span class="glyphicon glyphicon-user" aria-hidden="true"> CONTÁCTO</h3>
            <p>MIA. Roberto Ángel Melendez Armenta</p>
            
            <h3><span class="glyphicon glyphicon-envelope" aria-hidden="true"> E-MAIL</h3>
            <p>ramelendeza@itsm.edu.mx</p>
            
            <h3><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"> TELÉFONO</h3>
            <p>01 (235) 323 1545 </p>
            <p>EXT: 119</p>
        
            <h3><span class="glyphicon glyphicon-road" aria-hidden="true"> DIRECCIÓN</h3>
            <p>ITSM </p>
            <p>Gabriela Mistral, Las Rosas,</p> 
            <p>Misantla, Veracruz.</p>
            <p>México</p>  
          </article>

          <article id="articulo3" class="col-md-3 container-fluid">
            <h3><span class="glyphicon glyphicon-road" aria-hidden="true"> UBICACIÓN</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.380000969846!2d-96.84598978591953!3d19.95051522908681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85db117ae7e06483%3A0x8322b670e06e8cb3!2sInstituto+Tecnologico+Superior+de+Misantla!5e0!3m2!1ses!2smx!4v1446058403279" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>      
          </article> 
      
      </section>

 @stop     

