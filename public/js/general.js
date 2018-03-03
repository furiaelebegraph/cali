
$('.niveles_educativos');


let clickVideo = document.querySelector('.video_testimonial');
let videoTesti = document.getElementById('video_1');

clickVideo.onclick = function(){
	  if (videoTesti.paused) {
	    videoTesti.play();
	  } else {
	    videoTesti.pause();
	  }
};

let iconito = document.getElementById('nav-icon3');
let menu_mobil = document.querySelector('.menu_mobil');

iconito.onclick = function(){
	this.classList.toggle("open");
	menu_mobil.classList.toggle("mostrar_menu")

};

$('.carousel-indicators li:first').addClass('active');
$('.carousel-item:first').addClass('active');

	var lineDrawinge = anime({
		targets: '#lupita_1 .lines path',
		strokeDashoffset: [anime.setDashoffset, 0],
		easing: 'easeInOutCubic',
		duration: 2000,
		delay: 4000,
		begin: function(anim) {
  			document.querySelector('#lupita_1 .lines path').setAttribute("stroke", "white");
  			document.querySelector('#lupita_1 .lines path').setAttribute("fill", "none");
		},
		complete: function(anim) {
  			document.querySelector('#lupita_1 .lines path').setAttribute("fill", "white");
		}
	});

	var lineDrawinge = anime({
		targets: '#lupita_1 .lines path',
		strokeDashoffset: [anime.setDashoffset, 0],
		easing: 'easeInOutCubic',
		duration: 2000,
		delay: 4000,
		begin: function(anim) {
  			document.querySelector('#lupita_1 .lines path').setAttribute("stroke", "white");
  			document.querySelector('#lupita_1 .lines path').setAttribute("fill", "none");
		},
		complete: function(anim) {
  			document.querySelector('#lupita_1 .lines path').setAttribute("fill", "white");
		}
	});


	var microsco = anime({
		targets: '#microscopio_1 .lines path',
		strokeDashoffset: [anime.setDashoffset, 0],
		easing: 'easeInOutCubic',
		duration: 2000,
		delay: 8000,
		begin: function(anim) {
  			document.querySelector('#microscopio_1 .lines path').setAttribute("stroke", "white");
  			document.querySelector('#microscopio_1 .lines path').setAttribute("fill", "none");
		},
		complete: function(anim) {
  			document.querySelector('#microscopio_1 .lines path').setAttribute("fill", "white");
		}
	});

	var libro = anime({
		targets: '#librito .lines path',
		strokeDashoffset: [anime.setDashoffset, 0],
		easing: 'easeInOutCubic',
		duration: 2000,
		delay: 10000,
		begin: function(anim) {
  			document.querySelector('#librito .lines path').setAttribute("stroke", "white");
  			document.querySelector('#librito .lines path').setAttribute("fill", "none");
		},
		complete: function(anim) {
  			document.querySelector('#librito .lines path').setAttribute("fill", "white");
		}
	});
	var manitas = anime({
		targets: '#manitas .lines path',
		strokeDashoffset: [anime.setDashoffset, 0],
		easing: 'easeInOutCubic',
		duration: 2000,
		delay: 13000,
		  begin: function(anim) {
		    var letters = document.querySelectorAll(".st6"),
		      i;

		    for (i = 0; i < letters.length; ++i) {
		      letters[i].setAttribute("stroke", "white");
		      letters[i].setAttribute("fill", "none");
		    }
		  },
		  complete: function(anim) {
		    var letters = document.querySelectorAll(".st6"),
		      i;

		    for (i = 0; i < letters.length; ++i) {  
		      letters[i].setAttribute("fill", "white");
		    }
		  }
	});
$('.galeria_landing #carouselExampleCaptions').on('slid.bs.carousel', '', function() {
  var $this = $(this);

  if($('.carousel-inner .carousel-item:last').hasClass('active')) {
  	$('.galeria_landing').addClass('galeria_escondida').delay(3000);
    $this.children('.right.carousel-control').hide();
  }

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