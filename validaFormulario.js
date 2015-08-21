function validarForm(formulario) {
	var cola = formulario.cola.value;
	var nodos = formulario.num_nodos.value;
	var cores = formulario.num_cores.value;
	var tiempo = formulario.time.value;
	var app = formulario.aplicacion.text;
	var archi_salida = formulario.nom_archi_salida.value;
	var valida = 0;
	var aux_cola;
	
	
	//Aqui va la separacion
	
	var dato1 = 1;
	var dato2 = 20;
	
	
	
	switch(cola){
		case 'q1h-20p': 
			aux_cola = 1;
			break;
		case 'q1h-40p':
			aux_cola = 2;
			break;
			
		
	}
	
	
	
	
	if(nodos=="" ) { //¿Tiene 0 caracteres?
		document.getElementById('msj_nodos').innerHTML = "Falta indicar el numero de nodos";
		valida =1;
	}else{
        //document.getElementById('msj_nodos').innerHTML = "";
		if(nodos > dato2/20 || nodos < 1 ){
			document.getElementById('msj_nodos').innerHTML = "Nodos indicados incorrectos";
			valida =1;
		}else{
			document.getElementById('msj_nodos').innerHTML = "";
		}
    }
  
	if(cores=="") { //¿Tiene 0 caracteres?
		document.getElementById('msj_cores').innerHTML = "Falta indicar el numero de cores";
		valida = 1;
    }else{
        //document.getElementById('msj_cores').innerHTML = "";
		if(nodos > dato2 || nodos < 1 ){
			document.getElementById('msj_cores').innerHTML = "Cores indicados incorrectos";
			valida =1;
		}else{
			document.getElementById('msj_cores').innerHTML = "";
		}
    }
	
	if(app=="" ){
			document.getElementById('msj_nom_apli').innerHTML = "Apli indicados incorrectos";
			valida =1;
		}else{
			document.getElementById('msj_nom_apli').innerHTML = "";
		}
	
	
	if(valida == 1){
		return false;
	}	
  return true; //Si ha llegado hasta aquí, es que todo es correcto
}

function separaCadena(nodos){
	
	
}

function valida_nodos(nodos,cola){
	
	
}