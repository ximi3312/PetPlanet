<?php

		$mysqli = new MySQLi("localhost", "root","", "academ");
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
			//echo "Conexión exitossa!";

//	$link =mysqli_connect("localhost","root","");
//	if($link){
//		mysqli_select_db($link,"academ");
//	}
?>

<!--function getPDO () {
      try {
          $pdo = new PDO('mysql:host=localhost;dbname=tienda', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = $pdo->prepare('SELECT * FROM tblproductos');
         $sql->execute();
         $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
          return $resultado;
        }  
        catch(PDOException $e){
          print "¡Error!: <br/>";  
          return null;
  }