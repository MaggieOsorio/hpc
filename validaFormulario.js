function validarForm(formulario) {
  if(formulario.nodos.value.length==0) { //¿Tiene 0 caracteres?
    formulario.nodos.focus();    // Damos el foco al control
	 formulario.getElementById('errores').innerHTML = "Falta el Nombre";
    //alert('No has escrito tu nombre'); //Mostramos el mensaje
    return false; //devolvemos el foco
  }
  //return true; //Si ha llegado hasta aquí, es que todo es correcto
}