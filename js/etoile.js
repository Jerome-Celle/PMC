 $(document).keydown(function (event) {
        
    if (event.which == 16 && event.ctrlKey) {
		for (var i = 0; i < 100; i++) {
			$("div#etoile:last").fadeToggle(10)
		};
			
		}
    }
});


