var padre = document.formulario;
var btnAdd = document.getElementById("btn_agregar");
var btnRem = document.getElementById("btn_eliminar");

btnAdd.onclick = function(){
  if(formulario.length > 0  && formulario.children[formulario.length-1].value != ""){
    var input = document.createElement("input");
    input.type = "text";
    padre.appendChild(input);
  }else if(padre.length == 0){
    var input = document.createElement("input");
    input.type = "text";
    padre.appendChild(input);
  }
}

btnRem.onclick = function(){
  if(padre.children.length > 0){
    var ultimo_hijo = padre.children[padre.children.length-1];
    padre.removeChild(ultimo_hijo);
  }
}

  // var formulario = document.createElement("form");
  // formulario.action = "http://www.google.com.ar";
  // formulario.method = "post";

  // var inptMail = document.createElement("input");
  // inptMail.type = "text";
  // inptMail.name = "mail";
  // inptMail.placeholder = ("Escriba su Mail");

  // var btnEnviar = document.createElement("input");
  // btnEnviar.type = "submit";
  // btnEnviar.name = "enviar";

  // formulario.appendChild(inptMail);
  // formulario.appendChild(btnEnviar);
  // document.body.appendChild(formulario);

  // var btnAgregarInput = document.createElement("button");
  // btnAgregarInput.innerHTML = "Crear Input";
  // document.body.appendChild(btnAgregarInput);
  // btnAgregarInput.addEventListener("click",agregarInput());

  // function agregarInput(){
  //   var inptNombre = document.createElement("input");
  //   inptNombre.type = "text";
  //   inptNombre.name = "nombre";
  //   inptNombre.placeholder = ("Escriba su nombre");
  //   formulario.appendChild(inptNombre);
  // }
