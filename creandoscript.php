<html>
	<head>
		<title>Plantilla del script creado</title>
		<script type="text/javascript">
			function imprimir(){
  var objeto=document.getElementById('imprimeme');  //obtenemos el objeto a imprimir
  var ventana=window.open('','_blank');  //abrimos una ventana vacía nueva
  ventana.document.write(objeto.innerHTML);  //imprimimos el HTML del objeto en la nueva ventana
  ventana.document.close();  //cerramos el documento
  ventana.print();  //imprimimos la ventana
  ventana.close();  //cerramos la ventana
}
		
		</script>
	</head>

	<div text="center" id="imprimeme">
	<body>

		<?php
		
		
			//BADE DE DATOS
				//CONEXION CON LA BASE DE DATOS
				$link = mysql_connect('localhost', 'root', '')
					or die('No se pudo conectar: ' . mysql_error());
					//echo 'Connected successfully of BD';
	
				//SELECCION DE LA BASE DE DATOS
				mysql_select_db('hpc') or die('No se pudo seleccionar la base de datos');

				//CONSULTA
				$apli = $_GET['aplicacion'];
				$ver = $_GET["version"];
				$result = mysql_query("SELECT * FROM aplicaciones WHERE id = $apli");
				$result1 = mysql_query("SELECT * FROM versiones WHERE claveVer = $ver and id = $apli" );
			
				while ($row = mysql_fetch_array($result)){
					$app = $row['nombre'];
					//echo "este".$row['id']."  ".$row['nombre'];
				}
				while ($row1 = mysql_fetch_array($result1)){
					$v = $row1['version'];
					//echo "hasta".$row1['id']."  ".$row1['version'];
					echo "<br>";
				}
				//CERRAR BASE DE DATOS
				mysql_close($link);
				
			//CREACION Y ESCRITURA PARA ARCHIVO
			$var1= "#!/bin/bash"."\r\n"."\r\n"."\r\n";
			$var2 = "#SBATCH -p".$_GET ["queue"]."\r\n";
			$var3 = "#SBATCH -N ".$_GET["nodos"]."\r\n";
			$var4 = "#SBATCH -n ".$_GET["cores"]."\r\n";
			$var5 = "#SBATCH -t ".$_GET["tiempo"]."\r\n";
			$var6 = "#SBATCH -o ".$_GET["output"]."\r\n";
			$var7 = "#SBATCH -e ".$_GET["error"]."\r\n";
			$var8 = "#SBATCH --jobname ".$_GET["nombre"]."\r\n";
			$var9 = "module load ".$app."/".$v."\r\n"."\r\n"."\r\n";
			$var10 = $_GET["exec"]." ".$_GET["input"]."\r\n"."\r\n"."\r\n";
			$var11 = "exit 0";
			
			$ar = fopen("archivo.txt","a") or die("errir al crear archivo");
			
			fwrite($ar,$var1);
			fwrite($ar,$var2);
			fwrite($ar,$var3);
			fwrite($ar,$var4);
			fwrite($ar,$var5);
			fwrite($ar,$var6);
			fwrite($ar,$var7);
			fwrite($ar,$var8);
			fwrite($ar,$var9);
			fwrite($ar,$var10);
			fwrite($ar,$var11);
			
			//IMPRESION DE PANTALLA
			echo "<br>Tu script deberá de quedar similar a lo siguiente:"."<br><br>";
			echo $var1."<br><br><br>";
			echo $var2."<br>";
			echo $var3."<br>";
			echo $var4."<br>";
			echo $var5."<br>";
			echo $var6."<br>";
			echo $var7."<br>";
			echo $var8."<br>";
			echo $var9."<br><br><br>";
			echo $var10."<br><br>";
			echo $var11."<br>";
			
			
		?>
		
		<br>
		<a href="descarga.php?archivo=archivo.txt" >Descargar archivo</a>
 
	</body>
	</div>
	</br>
	<button onclick="imprimir();">
  IMPRIMIR
</button>
</html>
