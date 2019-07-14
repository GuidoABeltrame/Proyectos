var btnEliminarPost = document.getElementById("btn-agregar-section");
btnEliminarPost.addEventListener("click",eliminarPost);

function eliminarPost(){
  var seccionPosts = document.getElementById("posts");
  var seccionMain = document.getElementById("main-section");

  var elementoAEliminar = document.getElementById("articulo");

  if(elementoAEliminar == null){
    alert("Ya no hay nada que eliminar");
  }else {
    seccionPosts.removeChild(elementoAEliminar);
    seccionMain.removeChild(seccionPosts);
  }

}
