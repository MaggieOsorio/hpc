<?php
$idproveedor = $_GET['param_id'];

$link = mysql_connect('localhost', 'root', '')
		or die('No se pudo conectar: ' . mysql_error());
		echo 'Connected successfully of BD';
	mysql_select_db('hpc') or die('No se pudo seleccionar la base de datos');
	

$result = mysql_query("SELECT * FROM versiones WHERE id = $idproveedor");

while ($row = mysql_fetch_array($result)){
	echo '<option value="'.$row['claveVer'].'">'.$row['version'].'</option>';
}