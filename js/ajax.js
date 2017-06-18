$( document ).ready(function() 
{
	
$("#agregar").click(function(e) {
		$("#autoload").hide();
        var nombre= $("#buscar").val();

		
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