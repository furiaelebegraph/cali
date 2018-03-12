
$(document).ready(function () {

var cookie = document.cookie;
  if (cookie.indexOf('visited=', 0) == -1) {
      var expiration = new Date();
      expiration.setDate(expiration.getDate()+1);
      document.cookie = 'visited=1;expires=' + expiration + ';path=/';

      var element = document.getElementById('galeria_magica');
      element.style.display = 'block';
  }
});

let clickVideo = document.querySelector('.video_testimonial');
let videoTesti = document.getElementById('video_1');

clickVideo.onclick = function(){
   if (videoTesti.paused) {
     videoTesti.play();
   } else {
     videoTesti.pause();
   }
};

    var lineDrawinge = anime({
    targets: '#lupita_1 .lines path',
    strokeDashoffset: [anime.setDashoffset, 0],
    easing: 'easeInOutCubic',
    duration: 2000,
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
    delay: 3800,
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
    delay: 7500,
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
    delay: 10500,
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
    delay: 14000,
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