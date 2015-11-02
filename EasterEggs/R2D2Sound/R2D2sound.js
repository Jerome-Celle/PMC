function R2D2Sound(){
	$('#PMC_searchresults').html('<audio preload="auto" id="EasterEggsR2D2Sound">' +
  									'<source src="./EasterEggs/R2D2Sound/R2D2.mp3" type="audio/mp3">' +
  									'<source src="./EasterEggs/R2D2Sound/R2D2.ogg" type="audio/ogg">' +
								 '</audio>');
	document.getElementById('EasterEggsR2D2Sound').play();
}