function R2D2Sound(){
	$('#PMC_searchresults').html('<audio preload="auto" id="EasterEggsR2D2Sound">' +
  									'<source src="beep.mp3" type="audio/mp3">' +
  									'<source src="beep.ogg" type="audio/ogg">' +
								 '</audio>');
	$('#EasterEggsR2D2Sound').play();
}