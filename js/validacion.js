function permite(elEvento, permitidos) {
  // Variables que definen los caracteres permitidos
  var numeros = "0123456789";
  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
  var numeros_caracteres = numeros + caracteres;
  var teclas_especiales = [8, 37, 39, 46];
  // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
  // Seleccionar los caracteres a partir del parámetro de la función
  switch(permitidos) {
    case 'num':
      permitidos = numeros;
      break;
    case 'car':
      permitidos = caracteres;
      break;
    case 'num_car':
      permitidos = numeros_caracteres;
      break;
  }
  // Obtener la tecla pulsada
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  var caracter = String.fromCharCode(codigoCaracter);
  // Comprobar si la tecla pulsada es alguna de las teclas especiales
  // (teclas de borrado y flechas horizontales)
  var tecla_especial = false;
  for(var i in teclas_especiales) {
    if(codigoCaracter == teclas_especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
  // o si es una tecla especial
  return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
function validar(){
	/*valor = document.getElementById("cedula").value;
	if( valor == null || valor.length == 0 || /^\s+$/.test(valor) ) {
  	alert("vacio");
		return false;
	}
	var ano = document.getElementById("ano").value;
	var mes = document.getElementById("mes").value;
	var dia = document.getElementById("dia").value;
	valor = new Date(ano, mes, dia);
	if( !isNaN(valor) ) {
		alert("fecha");
	  return false;
	}
	elemento = document.getElementById("prueba");
	if( !elemento.checked ) {
		alert("Sin Checked");
	  return false;
	}*/
	opciones = document.getElementsByName("sexo");
	var seleccionado = false;
	for(var i=0; i<opciones.length; i++) {
	  if(opciones[i].checked) {
	    seleccionado = true;
	    break;
	  }
	}
	if(!seleccionado) {
		alert("Sin Checked")
	  return false;
	}
}