function C3POSound(){
	$('#PMC_searchresults').html('<audio preload="auto" id="EasterEggsC3POSound">' +
  									'<source src="./EasterEggs/C3POSound/IAMC3PO.mp3" type="audio/mp3">' +
  									'<source src="./EasterEggs/C3POSound/IAMC3PO.ogg" type="audio/ogg">' +
								 '</audio>');
	document.getElementById('EasterEggsC3POSound').play();
}