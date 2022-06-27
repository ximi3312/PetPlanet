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
	<h1 class="span" style="color: #F39C12">Carrito</h1>
</div>
<br>
<br>
   <h3>Lista del carrito</h3>
   <?php if(!empty($_SESSION['CARRITO'])) {?>
   <table class="table table-ligth table-bordered" style="background-color: white; ">
   	<tbody>
   		<tr>
   			<th width="40%">Descripcion</th>
   			<th width="15%" style="text-align: center;">Cantidad</th>
   			<th width="20%" style="text-align: center;">Precio</th>
   			<th width="20%" style="text-align: center;">Total</th>
   			<th width="5%">--</th>
   		</tr>
   		<?php $total=0; ?>
   		<?php foreach ($_SESSION['CARRITO'] as $indice=>$producto) {?>
   		<tr>
   			<td width="40%"><?php echo $producto['NOMBRE']?></td>
   			<td width="15%" style="text-align: center;"><?php echo $producto['CANTIDAD']?></td>
   			<td width="20%" style="text-align: center;">$<?php echo $producto['PRECIO']?></td>
   			<td width="20%" style="text-align: center;">$<?php echo number_format($producto['PRECIO']*$producto['CANTIDAD'],2); ?></td>
   			<td width="5%">

   				<form action="" method="post">

   					<input type="hidden" name="id" id="id" 
   					value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
   					<button 
   					class="btn btn-danger" 
   					type="submit"
   					name="btnAccion"
   					value="Eliminar" 
   					>Eliminar</button>
   				</form>
   			</td> 				
   		</tr>
   		<?php  $total = $total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
   	    <?php } ?>
   		<tr>
   			<td colspan="3" style="text-align: right;"><h3>Total</h3></td>
   			<td style="text-align: center;"><h3>$<?php echo number_format($total,2);?></h3></td>
   			<td></td>
   		</tr>
   		<tr>
   			<td colspan="5">
   				<form action="pagar.php" method="post">

   					<div class="alert alert-succes">
                    <div class="from-group">
   					<label for="my-input">Correo de contacto: </label>
   					<input 
   					class="form-control" 
   					id="email" type="email" 
   					name="email" 
   					placeholder="Escriba su correo" required> 					
   				    </div>
   				    <small id="emailHelp"
   				    class="from-text tex-muted">
   				    	Los detalles del envio se enviaran a este correo.
   				    </small>
   						
   					</div>
   					<button class="btn btn-primary btn-lg btn-block" type="submit"
   					name="btnAccion"
   					value="proceder" 
   					>Pagar >> </button>
   					
   				</form>
   				
   			</td>
   		</tr>

   	</tbody>
   </table>
 <?php } else{ ?> 
 	<div class= "alert alert-succes">
 		No hay productos en el carrito...
 	</div>
<?php }?>
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