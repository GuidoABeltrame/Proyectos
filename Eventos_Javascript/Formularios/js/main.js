var formulario = document.getElementsByName('formulario')[0];
var elementos = formulario.elements;


function validarNombre(e){
  if (formulario.nombre.value == 0) {
    alert("Completa el campo Nombre");
    e.preventDefault();
  }
}

function validarDireccion(e){
  if (formulario.direccion.value == 0){
    alert("Completa el campo Direccion");
    e.preventDefault();
  }
}
function validarTerminos(e){
  if (formulario.terminos.checked) {
  }else {
    alert("Acepta los terminos y condiciones");
    e.preventDefault();
  }
}


var validar = function(e){
  validarNombre(e);
  validarDireccion(e);
  validarTerminos(e);
}

formulario.addEventListener("submit",validar);
