<?php 
include 'Globales/config.php';
include 'Globales/conexion.php';
include 'carrito.php';
?>
<?php 
session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
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
	<h1 class="span" style="color: #F39C12">Generar Venta</h1>
</div>
<br>
<br>

<?php 
if($_POST){

	$total=0;
	$SID=session_id();
	//$pdo=getPDO();

	$Correo=$_POST['email'];

	foreach($_SESSION['CARRITO'] as $indice => $producto){

		$total=$total+($producto['PRECIO']*$producto['CANTIDAD']);

	}
    $sentencia=$pdo->prepare("INSERT INTO `Ventas` (`ID`, `ClaveTransaccion`, `PaypalDatos`, `Fecha`, `Correo`, `Total`, `satus`) VALUES (NULL, :ClaveTransaccion, '', NOW(), :Correo, :Total, 'pendiente')");

      $sentencia->bindParam(":ClaveTransaccion",$SID);
      $sentencia->bindParam(":Correo",$Correo);
      $sentencia->bindParam(":Total",$total);
      $sentencia->execute();
      $idVenta=$pdo->lastInsertId(); 


    echo "<h3>".$total."</h3>";
}
?>

<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p>&copy; Copyright Ximena Blackmer <br/><br/></p>
 </footer>
</div>


</body>
</html>