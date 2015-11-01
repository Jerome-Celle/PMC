 $(document).keydown(function (event) {
        
        if (event.which == 16 && event.ctrlKey) {
			var sizeMax = window.innerWidth * (9/10);
            randomCercle(sizeMax);
            randomShape(sizeMax);
        }
    });

 
//$(document).ready(function(){ 
//    setInterval(function(){ $("div.etoile").fadeOut(900).delay(300).fadeIn(800);  },2200); 
//});

function randomCercle(sizeMax){

	var posX = Math.random() * sizeMax;
	var posY = Math.random() * sizeMax;
	var taille = Math.random() * (sizeMax / 10);
	var color = 'rgba('+Math.floor(Math.random()*255)+', '+Math.floor(Math.random()*255)+', '+Math.floor(Math.random()*255)+','+Math.random()+')'
	$('#randomCercle').append('<div id=random></div>');	
	$("div#random:last").css('display','none')
						.css('background',color)
						.css('position','fixed')
						.css('left',posX + 'px')
						.css('top',posY + 'px')
						.width(taille +'px')
						.height(taille +'px')
						.css('-webkit-clip-path','circle(closest-side at center)')
						.fadeIn(1000);
}
function randomShape(sizeMax){

	var posX = Math.random() * sizeMax;
	var posY = Math.random() * sizeMax;
	var taille = Math.random() * (sizeMax / 10);
	var color = 'rgba('+Math.floor(Math.random()*255)+', '+Math.floor(Math.random()*255)+', '+Math.floor(Math.random()*255)+','+Math.random()+')'
	$('#randomCercle').append('<div id=random></div>');	
	$("div#random:last").css('display','none')
						.css('background',color)
						.css('position','fixed')
						.css('left',posX + 'px')
						.css('top',posY + 'px')
						.width(taille +'px')
						.height(taille +'px')
						.css('-webkit-clip-path','polygon(50% 0%, 0% 100%, 100% 100%)')
						.fadeIn(1000);

	posX = Math.random() * sizeMax;
	posY = Math.random() * sizeMax;
	taille = Math.random() * (sizeMax / 10);
	color = 'rgba('+Math.floor(Math.random()*255)+', '+Math.floor(Math.random()*255)+', '+Math.floor(Math.random()*255)+','+Math.random()+')'
	$('#randomCercle').append('<div id=random></div>');	
	$("div#random:last").css('display','none')
						.css('background',color)
						.css('position','fixed')
						.css('left',posX + 'px')
						.css('top',posY + 'px')
						.width(taille +'px')
						.height(taille +'px')
						.fadeIn(1000);
}

function functionTest(){
	var sizeMax = window.innerWidth * (9/10);
	var posX = Math.random() * sizeMax;
	var posY = Math.random() * sizeMax;
	var taille = Math.random() * (sizeMax / 10);
	var color = 'rgba('+Math.floor(Math.random()*255)+', '+Math.floor(Math.random()*255)+', '+Math.floor(Math.random()*255)+','+Math.random()+')'
	
	$('#randomCercle').append('<div id=random></div>');	
	$("div#random:last").css('position','absolute')
						.width(sizeMax+'px')
						.height(sizeMax+'px')
						.css('left',posX + 'px')
						.css('top',posY + 'px')
  .css('width','40vw')
  .css('float','right')
  .css('background',color)
  .css('background-size','cover')
  /*-webkit-shape-outside: polygon(0 0, 100% 0, 100% 100%, 30% 100%);*/
  /*shape-outside: polygon(0 0, 100% 0, 100% 100%, 30% 100%);*/
  .css('-webkit-shape-margin',' 20px')
  .css('-webkit-shape-outside',' url(mask.png) top left')  
  .css('shape-outside',' url(mask.png) top left')
  .css('-webkit-clip-path',' polygon(46.45% 27.9%, 37.1% 28.75%, 22.45% 29.55%, 32.2% 31.55%, 40.8% 33.05%, 49.05% 33.85%, 62.9% 34.9%, 59% 37.35%, 52.8% 39.6%, 42.9% 41.25%, 32.75% 42.7%, 22.1% 43.7%, 27.35% 45.25%, 30.9% 46.35%, 38.6% 47.35%, 44.95% 47.95%, 52.8% 48.3%, 48.15% 50.85%, 42.3% 53.25%, 35.2% 55.05%, 27.7% 56.5%, 17.6% 57.85%, 6.95% 58.4%, 18.9% 62%, 32.2% 63.1%, 56.35% 64.4%, 82% 64.7%, 84.85% 75.5%, 112.9% 76.25%, 113.85% 2.9%, 93.25% 15.3%, 86.5% 19%, 78.85% 21.65%, 69.3% 24.35%, 60.5% 26.2%)')
  //.css('-webkit-clip-path',' polygon(135.3000030518px 136.8000030518px, 135.6000030637px 151.0000028610px, 123.1000030637px 150.7000028491px, 123.3000030667px 63.5000059009px, 134.2000026852px 62.5000059009px, 135.4000027329px 62.5000059009px, 146.7000029236px 64.8000058532px, 157.8000033051px 92.8000058532px, 148.6000034958px 115.5000066161px, 135.5000031143px 119.5000066161px, 135.3000030518px 136.8000030518px)')
  //.css('-webkit-clip-path',' polygon(197.1999969482px 107.1999969482px, 194.0999970436px 140.0999984741px, 178.8999972343px 151.8999986649px, 178.8999972343px 151.7999986634px, 163.5999970436px 139.7999986634px, 160.5999970436px 106.9999994263px, 160.6999970451px 106.9999994263px, 163.6999970451px 74.4000009522px, 178.9999972358px 62.4000009522px, 178.9999972358px 62.3000009507px, 194.1999970451px 74.0000007600px, 197.1999969482px 107.1999969482px, 197.1999969482px 107.1999969482px)')
  //.css('-webkit-clip-path',' polygon(213.700 136.800, 214.000 151.000, 201.500 150.700, 201.700 63.500, 212.600 62.500, 213.800 62.500, 225.100 64.800, 236.200 92.800, 227.000 115.500, 213.900 119.500, 213.700 136.800)')
  //.css('-webkit-clip-path',' polygon((290.000 104.700, 288.700 151.400, 276.400 151.400, 279.400 62.100, 291.100 62.200, 291.100 62.300, 294.300 62.300, 301.600 106.900, 308.400 62.300, 319.600 62.200, 323.100 62.000, 326.400 150.900, 314.700 151.800, 313.000 106.300, 307.400 139.200, 296.800 140.400, 290.000 104.700)')
  
}