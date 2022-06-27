<!DOCTYPE html>
 <?php
    session_start();
    if (@!$_SESSION['user']) {
        header("Location:index.php");
    }elseif ($_SESSION['rol']==1) {
        header("Location:admin.php");
    }
    ?> 
<html>
<head>
	<title>PetPlanet</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ximena Blackmer">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>
<body data-offset="40" background="images/fondoprincipal.jpeg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<br>
<br>
<?php

include("include/menu.php");

?>
<div class="row">
	<h1 class="span" style="color: #F39C12">Gatos</h1>
</div>
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

</body>
</html>