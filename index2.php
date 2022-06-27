<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PetPlanet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ximena Blackmer">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/fondoprincipal.jpeg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>
<!-- ======================================================================================================================== -->

<div id="myCarousel" class="carousel slide homCar">
		<div class="carousel-inner" style="border-top:18px solid #222; border-bottom:1px solid #222; border-radius:4px;">
		  <div class="item active">
			<img src="images/mision.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Mision</h4>
				  <p>
				  Esta pagina tiene como proposito promover el amor y cuidado a tu mascota, asi como brindar 
				  conocimiento sobre los primeros cuidados de esta.
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/vision.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Vision</h4>
				  <p>
				  Nuestros lectores tendran un panorama amplio sobre primeros auxilios, resolver dudas sobre las conductas de su mascota y la posibilidad de compartir estas experiencias en los apartados
				  </p>
			</div>
		  </div>
		  <div class="item">
			<img src="images/atencion.jpg" alt="#" style="min-height:250px; min-width:100%"/>
			<div class="carousel-caption">
				  <h4>Atencion a Clientes</h4>
				  <p>
				  24/7 la afluencia de nuestra pagina aumenta cada minuto!!
				  </p>
			</div>
		  </div>
		</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
</div>
<h3>Saber sobre...</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class="well well-small">
					<h4>Perros</h4>
					<a href="perros.php"><small>Ver detalles</small></a>
				</div>
			</div>
			
			<div class="span2">
				<div class="well well-small">
					<h4>Gatos</h4>
					<a href="gatos.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Roedores</h4>
					<a href="roedores.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Peces</h4>
					<a href="fp.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Reptiles</h4>
					<a href="fm.php"><small>Ver detalles</small></a>
				</div>
			</div>
			<div class="span2">
				<div class="well well-small">
					<h4>Aves</h4>
					<a href="md.php"><small>Ver detalles</small></a>
				</div>
			</div>
			
			
</div>
<h3>Informate sobre ...</h3>
<div class="row">

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Los mejores centros de adopcion</h3>	
	<img src="images/adopta.jpg" alt="#"/>
	<div class="caption">
	<h5>Ver detalles</h5>	
	<p align="justify">
	
Existen muchas razones para adoptar una mascota.  Algunos eligen una raza que les gusta especialmente o que les parece que se adaptará mejor a su estilo de vida. Otros deciden adoptar en una protectora de animales porque les parece una forma de ayudar.  Independientemente de la procedencia de una mascota, la mayoría de propietarios establecen un estrecho vínculo con ella, la ven como un miembro más de la familia y disfrutan de muchos de los beneficios previamente listados.
	</p>
	<a class="pull-right" href="al.php">Adoptar!</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Nuestra tienda de Mascotas</h3>	
	<img src="images/compras.jpg" />
	<div class="caption">
	<h5>Ver detalles</h5>	
	<p align="justify">
	
Nuestra tienda de mascotas tienen como mision brindar una solución integral a la atención de la mascota, a partir de una inmejorable oferta de producto, precio, calidad y servicio.
    </p>
	<a class="pull-right" href="tienda.php">Comprar!</a>
	<br/>
	</div>
	</div>
	</div>

	<div class="span4">
	<div class="thumbnail">
	<h3 style="text-align:center">Meeting Pet</h3>	
	<img src="images/carreras.jpg"/>
	<div class="caption">
	<h5>Ver detalles</h5>	
	<p align="justify">
	
Es una de las dinamicas de nuestra pagina donde los usuarios de cierta region organizan eventos(caridad, sociales y oscio), carreras y talleres en las que asistes con tu mascota para convivir con otros amantes de los animales.
	</p>
	<a class="pull-right" href="cb.php">Participar!</a>
	<br/>
	</div>
	</div>
	</div>


</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Ximena Blackmer <br/><br/></p>
 </footer>
</div><!-- /container -->
    
	</style>
  </body>
</html>