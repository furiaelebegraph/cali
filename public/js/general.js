
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
