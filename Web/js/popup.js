var btnAbrirPopupManicuria = document.getElementById('btn-abrir-popup-manicuria'),
  overlayManicuria = document.getElementById('overlay-manicuria'),
  popupManicuria = document.getElementById('popup-manicuria'),
  btnCerrarPopupManicuria = document.getElementById('btn-cerrar-popup-manicuria'),
  tablaPreciosManicuria =  document.getElementById('popup-precios-manicuria');

// PopUp para Manicuria
btnAbrirPopupManicuria.addEventListener('click', function(){
  overlayManicuria.classList.add('active');
  popupManicuria.classList.add('active');
  tablaPreciosManicuria.classList.add('active');
});
btnCerrarPopupManicuria.addEventListener('click', function(){
  overlayManicuria.classList.remove('active');
  popupManicuria.classList.remove('active');
  tablaPreciosManicuria.classList.remove('active');
});
// PopUp para Cortes
var btnAbrirPopupCortes = document.getElementById('btn-abrir-popup-cortes'),
btnCerrarPopupCorte = document.getElementById('btn-cerrar-popup-corte'),
overlayCorte = document.getElementById('overlay-corte'),
popupCorte = document.getElementById('popup-corte'),
tablaPreciosCorte =  document.getElementById('popup-precios-cortes');

btnAbrirPopupCortes.addEventListener('click', function(){
  overlayCorte.classList.add('active');
  popupCorte.classList.add('active');
  tablaPreciosCorte.classList.add('active');
});
btnCerrarPopupCorte.addEventListener('click', function(){
  overlayCorte.classList.remove('active');
  popupCorte.classList.remove('active');
  tablaPreciosCorte.classList.remove('active');
});
// PopUp para Depilacion
var btnAbrirPopupDepilacion = document.getElementById('btn-abrir-popup-depilacion'),
btnCerrarPopupDepilacion = document.getElementById('btn-cerrar-popup-depilacion'),
overlayDepilacion = document.getElementById('overlay-depilacion'),
popupDepilacion = document.getElementById('popup-depilacion'),
tablaPreciosDepilacion =  document.getElementById('popup-precios-depilacion');

btnAbrirPopupDepilacion.addEventListener('click', function(){
  overlayDepilacion.classList.add('active');
  popupDepilacion.classList.add('active');
  tablaPreciosDepilacion.classList.add('active');
});
btnCerrarPopupDepilacion.addEventListener('click', function(){
  overlayDepilacion.classList.remove('active');
  popupDepilacion.classList.remove('active');
  tablaPreciosDepilacion.classList.remove('active');
});
// PopUp para Masajes
var btnAbrirPopupMasajes = document.getElementById('btn-abrir-popup-masajes'),
btnCerrarPopupMasajes = document.getElementById('btn-cerrar-popup-masajes'),
overlayMasajes = document.getElementById('overlay-masajes'),
popupMasajes = document.getElementById('popup-masajes'),
tablaPreciosMasajes =  document.getElementById('popup-precios-masajes');

btnAbrirPopupMasajes.addEventListener('click', function(){
  overlayMasajes.classList.add('active');
  popupMasajes.classList.add('active');
  tablaPreciosDepilacion.classList.add('active');
});
btnCerrarPopupMasajes.addEventListener('click', function(){
  overlayMasajes.classList.remove('active');
  popupMasajes.classList.remove('active');
  tablaPreciosMasajes.classList.remove('active');
});
