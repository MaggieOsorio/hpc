<html>
<head>
	<meta charset="utf-8">
	<title> Creación de scripts SLURM </title>  
	
	<!--SCRIPT QUE NOS AYUDA A CREAR LAS LISTAS DEPENDIENTES-->
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript">
			$("document").ready(function(){
				$( "#proveedor" ).load( "server/aplicaciones.php" );

				$("#proveedor").change(function(){
					var id = $("#proveedor").val();
					$.get("server/version.php",{param_id:id})
					.done(function(data){
						$("#producto").html(data);
					})
				})
			})
		</script>
	
	<script type="text/javascript" src="validaFormulario.js"></script>
	
	<link type="text/css" href="http://localhost/hpc/bootstrap/bootstrap-3.3.5-dist/css/bootstrap.min.css" rel="stylesheet">
	
	<link type="text/css" rel="stylesheet" href="hpc/bootstrap/bootstrap-3.3.5-dist/css/bootstrap-theme.min.css">
	
	<style type="text/css">
		

		
	</style>
	
</head>

<div>
	<body class="row">
		<div >
			<p aling="center">
			<h1>ENCABEZADO</h1>
			</p>
		</div>
		
		<div class="col-md-5 col-md-offset-1">
		
		<form method ="get" action="creandoscript.php" name="form1" onsubmit="return validarForm(this);" >
	
			<div class="form-group">
			<label >Cola de ejecución a elegir:</label>
			<select id="cola" name="queue" class="form-control">
			<option>q1h-20p</option>
			<option>q1d-20p</option> 
			<option>q4d-20p</option>
			<option>q7d-20p</option>
			<option>q1h-40p</option>
			<option>q1d-40p</option>
			<option>q4d-40p</option>
			<option>q1h-80p</option>
			<option>q1h-80p</option>
			<option>q12h-80p</option>
			<option>q1d-80p</option>
	<option>q1h-160p</option>
	<option>q12h-160p</option>
	<option>q1d-160p</option>
	<option>q5d-160p</option>
	<option>q1h-320p</option>
	<option>q12h-320p</option>
	<option>q1d-320p</option>
	<option>q1d-640p</option>
	<option>gpus</option>
	</select>
	<br>
		</div>
	
	
	<div>
	<!--LOS NODOS VAN A DEPENDER DE LA COLA DE EJECUCION, CON RESPECTO AL SEGUNDO NUM. SI ES 20P -> MAX 1 SI ES 40P->MAX 2...-->
	<label>Número de nodos a usar:</label> 
	<input type="text" id="num_nodos" name="nodos" class="form-control"><br> 
	<div id="msj_nodos" style="color:red;"></div>
	</div>
	
	<div>
	<!--LOS CORES VAN A DEPENDER DE LA COLA DE EJECUCION, CON RESPECTO AL SEGUNDO NUM. SI ES 20P -> MAX 20 SI ES 40P->MAX 20...-->
	<label>Número de cores a usar:</label> 
	<input type="text" id="num_cores" name="cores" class="form-control"><br> 
	<div id="msj_cores"></div>
	</div>
	
	<div>
	<!--puede se numero ej 10 que significa 10min o formato 1:30:00-->
	<label>Tiempo máximo a ejecutar:</label>  
	<input type="text" id="time" name="tiempo" class="form-control"><br>
	<div id="msj_time"></div>
	</div>
	
	<div>
	<label>Nombre del archivo de salida:</label> 
	<input type="text" id="nom_archi_salida" name="output" class="form-control"><br>
	<div id="msj_nom_archi_salida"></div>
	</div>
	
	<div>
	<label>Nombre del archivo de error:</label> 
	<input type="text" id="nom_archi_error" name="error" class="form-control"><br>
	<div id="msj_nom_archi_error"></div>
	</div>
	
	<div>
	<label>Nombre del job a ejecutar:</label> 
	<input type="text" id="nom_job" name="nombre" class="form-control"><br>
	<div id="msj_nom_job"></div>
	</div>
	
		
	<div>
	<label>Nombre del archivo de entrada:</label>
	<input type="text" id="nom_archi_entrada" name="input" class="form-control"><br>
	<div id="msj_nom_archi_entrada"></div>
	</div>
	
	<div>
	<label>Nombre de la aplicación a usar:</label>
	<select id="proveedor" name="aplicacion" class="form-control"  onchange="mostrarText()" >
	
	</select><br>
	</div>
	<div id="msj_nom_apli"></div>
	
	<div>
	<label>Versión de la aplicación a usar:</label>
	<select id="producto" name="version" class="form-control">

	
	</select>
	</div>
	<br>
	
	<div>
	<label>Nombre del ejecutable de la aplicación a usar:</label>
	<input type="text" name="exec" class="form-control"><br>
	</div>
	
	<div>
	<input type ="submit" id="bEnviar" value="CREAR SCRIPT" ><br>
	</div>
	
	</div>

</form>
</body>
</div>
</html>
