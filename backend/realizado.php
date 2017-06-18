<?php
include("conexion/cone.php");

$recibo=$_GET['id'];

	echo $recibo;
	
		$insertar="UPDATE `agenda` SET `estado`='realizado' WHERE `id`= '$recibo'";
		$insert=mysqli_query($conexion,$insertar);
		
		header('Location:http://freddymp.byethost7.com/');
		
	
?>