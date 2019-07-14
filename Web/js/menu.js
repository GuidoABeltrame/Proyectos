$(function(){
  var header = document.getElementById('header');
  var headroom = new Headroom(header);
  headroom.init();
  // Menu Responsive
  // calculo de ancho de pagina
  var ancho = $(window).width(),
  enlaces = $('#enlaces'),
  btnMenu = $('#btn-menu'),
  icono = $('#btn-menu .icono');

  if(ancho < 800){
    enlaces.hide();
    icono.addClass('fa-bars');
  }

  btnMenu.on('click', function(e){
    enlaces.slideToggle(); //Oculta o Muestra el Menu
    icono.toggleClass('fa-bars');
    icono.toggleClass('fa-times'); //Alterna los iconos dependiendo de cual tenga.
  });

  $(window).on('resize', function(){
    if($(this).width() > 800){
      enlaces.show();
      icono.addClass('fa-times');
      icono.removeClass('fa-bars');
    }else {
      enlaces.hide();
      icono.addClass('fa-bars');
      icono.removeClass('fa-times');
    }
  });
});
