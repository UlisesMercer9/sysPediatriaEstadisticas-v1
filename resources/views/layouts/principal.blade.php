<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Pediatria</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos.css">
</head>
<body>

  <section id="main" class="container">
    
	<header>
		<!--DECLARACION DEL MENU-->
		<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top" role="navigation">
           <div class="container">

           	<!--MENU SOLO EN DISPOSITIVOS MOVILES-->
           	  <div class="navbar-header">
           	  	 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navegacion-fm">
           	  	 <span class="sr-only">Desplegar / Ocultar Menu</span>
           	  	 <span class="icon-bar"></span>
           	  	 <span class="icon-bar"></span>
           	  	 <span class="icon-bar"></span>	
           	  	 </button>
           	<!---->

           	  	 <a href = "#" class="navbar-brand">Logo</a>
           	  </div>
           	  <!-- INICIA MENU -->
           	  <div class="collapse navbar-collapse" id="navegacion-fm">
           	  	   <ul class="nav navbar-nav">
           	  	   	   <li class="active"><a href="{!!URL::to('/')!!}">INICIO</a></li>
           	  	   	   <li ><a href="{!!URL::to('/areaInfantil')!!}">AREA INFANTIL</a></li>
           	  	   	   <li ><a href="{!!URL::to('/quienesSomos')!!}">¿QUIENES SOMOS?</a></li>
           	  	   	   <li ><a href="{!!URL::to('/contacto')!!}">CONTACTO</a></li>
           	  	   </ul>

               <!--Elementos a la derecha-->
           	  	   <ul class="nav navbar-nav navbar-right">
           	  	   	
                    <li><a href="{!!URL::to('/login')!!}" data-toggle="modal"><span class="glyphicon glyphicon-share" aria-hideen="true"></span> ACCEDER</a></li> 	   	
           	  	   </ul>
           	  </div>
           </div>
        </nav>
	</header>

  <div class="clearfix"></div>

   <!--ventana modal 1-->


   
                 


	<!--Aqui va el banner-->
	<section class="jumbotron">
		<br>
		<br>
		<div class="container">
			<h1>BIENVENIDOS!</h1>
			<p>Resultados y cuidados del infante</p>
		</div>
		
	</section>


  <div class="clearfix"></div>
  
  @yield('content') 

     
  <div class="clearfix"></div>

    <footer >

      <div class="clearfix"></div>

    	 <div class="container-fluid">
        <center>
        <p text-center>CONTÁCTANOS EN NUESTRAS REDES SOCIALES</p>
        <br>
        <img src="img/facebook.png" alt="">&nbsp;&nbsp;
        <img src="img/twitter.png" alt="">&nbsp;&nbsp;
        <img src="img/you_tube.png" alt="">
        <br>
        <br>
        <p text-center>www.itsm.edu.mx</p>
        </center>
       </div>
    	
    </footer>



	<script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>

  </section>
</body>
</html>