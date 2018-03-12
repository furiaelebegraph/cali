new WOW().init();
$('.niveles_educativos');


let iconito = document.getElementById('nav-icon3');
let menu_mobil = document.querySelector('.menu_mobil');

iconito.onclick = function(){
	this.classList.toggle("open");
	menu_mobil.classList.toggle("mostrar_menu")

};

$('.carousel-indicators li:first').addClass('active');
$('.carousel-item:first').addClass('active');


$('.galeria_landing #carouselExampleCaptions').on('slid.bs.carousel', '', function() {
  var $this = $(this);

  if($('.carousel-inner .carousel-item:last').hasClass('active')) {
  	$('.galeria_landing').delay(4000).queue(function(){
  		$('.galeria_landing').addClass('galeria_escondida');
  	});
    $this.children('.right.carousel-control').hide();
  }

});

$('.descubre_cali').on("click", function(){
	$('.galeria_landing').addClass('galeria_escondida');
});

var lineDrawing = anime({
  targets: '.svg_imagen_1 .lines path',
  strokeDashoffset: [anime.setDashoffset, 0],
  easing: 'easeInOutCubic',
  duration: 500,
  delay: function(el, i) { return i * 150 },
  begin: function(anim) {
    var letters = document.querySelectorAll(".st0"),
      i;

    for (i = 0; i < letters.length; ++i) {
      letters[i].setAttribute("stroke", "white");
      letters[i].setAttribute("fill", "none");
    }
  },
  complete: function(anim) {
    var letters = document.querySelectorAll(".st0"),
      i;

    for (i = 0; i < letters.length; ++i) {  
      letters[i].setAttribute("fill", "white");
    }
  }
});