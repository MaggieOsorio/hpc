
<?php
	//CONEXION CON LA BASE DE DATOS
	$link = mysql_connect('localhost', 'root', '')
		or die('No se pudo conectar: ' . mysql_error());
		echo 'Connected successfully of BD';
	
	//SELECCION DE LA BASE DE DATOS
	mysql_select_db('hpc') or die('No se pudo seleccionar la base de datos');

	//CONSULTA
	$result = mysql_query("SELECT * FROM aplicaciones");
	
	//ELEMENTOS DE LA LISTA
	echo '<option value="">[seleccione]</option>';
	while ($row = mysql_fetch_array($result)){
		echo '<option value="'.$row['id'].'">'.$row['nombre'].'</option>';
		//echo '<option>'.$row['nombre'].'</option>';
	}
	
	mysql_close($link);
?>
