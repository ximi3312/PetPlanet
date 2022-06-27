<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
<?php
include 'Globales/config.php';
include 'Globales/conexion.php';
include 'carrito.php';
?>
<!DOCTYPE html>
<html>
<head>
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
<?php

include("include/menu.php");

?>
<div class="row">
	<h1 class="span" style="color: #F39C12">Tienda</h1>
</div>
<br>
<br>
<div class="container">
	<?php if($mensaje!=""){?>
	<div class="alert alert-success">
		<!--mensaje-->
        <?php echo $mensaje;?>
		<a href="mostrarcarrito.php" class="badge badge-success">Ver carrito</a>
	</div>
    <?php }?>
	<div class="row">

		<?php 
          $listaProductos=getPDO();
       
		//$sentencia=$pdo->prepare("SELECT * FROM tblproductos");
		//$sentencia->execute();
		//$listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
		//print_r($listaProductos);
        ?>
        <?php foreach ($listaProductos as $producto) {?>
        <div class="span3">
	        <div class="thumbnail">	
	        <img title="<?php echo $producto['Nombre'];?>" src="<?php echo $producto['Imagen'];?>" alt="#" data-toggle="popover"
	        data-trigger="hover"
	        data-content="<?php echo $producto['Descripcion'];?>"/>

	          <div class="caption">
	          <span><?php echo $producto['Nombre'];?></span>
	          <h5 class="card-title">$<?php echo $producto['Precio'];?></h5>	
	          <form action="" method="post">

	          	<input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
	          	<input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
	          	<input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
	          	<input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">


	          	<button class="btn btn-primary" 
	          	name="btnAccion" 
	          	value="Agregar" 
	          	type="submint">Agregar al carrito
	            </button>

	          </form>
	          <br/>
	          </div>
	       </div>
	    </div>
	    
        <?php } ?>		
	</div>
</div>

<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Ximena Blackmer <br/><br/></p>
 </footer>
</div><!-- /container -->
<script>
	$(function () {
  $('[data-toggle="popover"]').popover()
   });
</script>

</body>
</html>