<!DOCTYPE html>

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li><a href="index2.php">Principal</a></li>
	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
				<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong></a></li>
			  <li><a href="tienda.php">Tienda</a></li>		
			  <li><a href="mostrarcarrito.php">Carrito(<?php 
			    echo(empty($_SESSION['CARRITO']))?0: count($_SESSION['CARRITO']);
			  ?>)</a></li>	
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>	 
		</ul>
	  </div>
	</div>
  </div>
</div>
</html>