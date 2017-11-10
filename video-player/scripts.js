var video = document.querySelector('#video');
var playButton = document.querySelector('.player__button');

playButton.addEventListener('click', (e) => {
	if(video.paused === true) {
		var interVal = setInterval((e) => {
			setTimeBar();
		}, 10);
		video.play();
	} else {
		clearInterval(interVal);
		video.pause();
	}
});

function setTimeBar() {
	var percentage = video.currentTime / video.duration * 100;
	document.querySelector('.progress__filled').style.width = percentage + '%';
}

video.addEventListener('click', e => {
  document.getElementById('#video').requestFullscreen();
});

var bar = document.querySelector('.progress');

bar.addEventListener('click', e => {
	var percentage = e.offsetX / bar.offsetWidth * 100;
	var videoTime = (percentage / 100) * video.duration;
	document.querySelector('.progress__filled').style.width = percentage + '%';
	video.currentTime = videoTime;
});


var audio = document.querySelector('input[name="volume"]');

audio.addEventListener('change', (e) => {
	video.audio = audio.value;
	console.log(audio.value);
});

var video = document.querySelector("video.viewer");
video.addEventListener("dblclick",toggleFullScreen);

    var fullscreen = false;

function toggleFullScreen() {
  if(fullscreen == false) {
      var requestFullScreen = video.requestFullscreen || video.msRequestFullscreen || video.mozRequestFullScreen || video.webkitRequestFullscreen;
      requestFullScreen.call(video);
      fullscreen = true;
  } else if (fullscreen == true){
      var exitFullScreen = video.exitFullscreen || video.msExitFullscreen || video.mozExitFullScreen || video.webkitExitFullscreen;
      exitFullScreen.call(video);
      fullscreen = false;
  }
}
