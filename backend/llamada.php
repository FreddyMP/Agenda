<?php


$recibo=$_POST['nombre1'];

	if(isset($recibo))
	{
		if ($recibo != null) {
			buscar($recibo);
		}
		else
		{		
			?>
				<div class="alert alert-info">
 				 <strong>Recuerda!</strong> El campo de texto no puede estar vacio.
				</div>
<?php
		}
		
	}
	
	function buscar($pokemon)
	{
		include("conexion/cone.php");
		$insertar="INSERT INTO `agenda`(`Tarea`,`estado`) VALUES ('$pokemon','pendiente')";
		$insert=mysqli_query($conexion,$insertar);
		$traer= "SELECT * FROM `agenda` where estado = 'pendiente'  ";
		$ejec= mysqli_query($conexion, $traer);
		
		?>
			
		<?php
		while($row=mysqli_fetch_array($ejec))
		{
          		?>
          		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          		<script src="js/jquery-3.2.1.min.js"> </script>
          		<script type="text/javascript">
          			$( document ).ready(function() 
{
	$('[data-toggle="tooltip"]').tooltip();  
   
    });
          		</script>
          		<br><div class="well">
          			<?php
      					  echo $row["Tarea"]." ";?>
      					  
      					  <a href="backend/realizado.php?id=<?php echo $row['id'] ?>"> <img data-toggle="tooltip" title="Marcar realizado" src="img/check.png" height="20"></a> 
      					  <a href="backend/eliminado.php?id=<?php echo $row['id'] ?>"> <img data-toggle="tooltip" title="Eliminar" src="img/eliminar.png" height="23"></a>
      					  
      					  <?php
      				  ?>
      			  		</div><br>
      			 	 <?php

				}
		
	}
	

?>