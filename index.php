
<html>
<head> 

<title>Agenda web</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() 
{
	     $('[data-toggle="tooltip"]').tooltip(); 
$("#agregar").click(function(e) {
		$("#autoload").hide();
        var nombre= $("#buscar").val();
    	$("#buscar").val(" ");
		
		$.ajax({
			type:"POST",
			url:"backend/llamada.php",
			data:"nombre1="+nombre,
			dataType:"html",
			success: function(data)
			{
				$("#contenido").empty();
				$("#contenido").append(data);
			}
			});
	});
   
    });
</script>
</head>
<body>
<div class="container">

	<form>

		<br>
		<input class="form-control" type="text" id="buscar" placeholder="Insertar tarea" />

	</form>

	<button class="btn btn-default" id="agregar">Agregar tarea</button>

	<br>
	<div id="autoload">

		<?php
				include("backend/conexion/cone.php");
			
				$registros= "SELECT * FROM `agenda` where estado = 'pendiente'  ";
				$ejecucion = mysqli_query($conexion, $registros);
				
				$numero_registro=mysqli_num_rows($ejecucion);
				$pagina=1;

				if (isset($_GET['id'])) 
				{

				$pagina=$_GET['id'];

				}

		$tamano_pagina=5;
		
		$empezar_desde=($pagina-1)*$tamano_pagina;//0x5=0,1x5=5
		$total_paginas=ceil($numero_registro/$tamano_pagina);
		$numero=1;

		
			while ( $numero  <= $total_paginas) 
			{
			?>
						<ul class="pagination">
							<li><a href="http://freddymp.byethost7.com/?id=<?php echo $numero?> "><?=  $numero ?></a></li>
						</ul>

				<?php
				$numero++;
			}

				$traer= "SELECT * FROM `agenda` where estado = 'pendiente' LIMIT $empezar_desde, $tamano_pagina  ";
				$ejec= mysqli_query($conexion, $traer);

						while($row=mysqli_fetch_array($ejec))
				{
          		?>
          		<br>
          		<div class="well">
          			<?php
      					  echo $row["Tarea"]." ";?><a href="backend/realizado.php?id=<?php echo $row['id'] ?>"> <img data-toggle="tooltip" title="Marcar realizado" src="img/check.png" height="20"></a> 
      					  <a href="backend/eliminado.php?id=<?php echo $row['id'] ?>"> <img data-toggle="tooltip" title="Eliminar" src="img/eliminar.png" height="23"></a>

      					  <?php
      				  ?>
		
      			  		</div>
      			 	 <?php 

				}
		?>
	</div>
	<div id="contenido">
	</div>
</div>
</body>
</html>
