<head>

	<!-- Basic Page Needs
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<meta charset="utf-8">
	<title><?php echo $headTitle ?></title>
	<meta name="description" content="<?php echo $headDescritpion ?>">
	<link type="text/plain" rel="author" href="http://supagog.com/humans.txt" />

	<!-- Mobile Specific Metas
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="<?php echo $colorPortail ?>">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="<?php echo $colorPortail ?>">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $colorPortail ?>">

	<!-- FONT
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

	<!-- CSS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/skeleton.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<link rel="stylesheet" href="css/header.css">

	<!-- JS
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
	<script type="text/javascript" src="./js/viewportchecker.js"></script> 
	<script type="text/javascript" src="./js/jquery.ba-throttle-debounce.js"></script>
	<script type="text/javascript" src="./js/javascript.js"></script>
	<script type="text/javascript" src="./js/cercle.js"></script><script type="text/javascript">
		//génération du tableau de toutes les images présentes dans img/movimg
		var arrayImage = <?php 
				$arrayTemp = array_diff(scandir('./img/movimg/'), array('..', '.'));
				$array = array_splice($arrayTemp, 0, 2);
				echo json_encode($arrayTemp);?>;
	</script>
	
	<!--EasterEggs -->
	<script type="text/javascript" src="./EasterEggs/Matrix/matrix.js"></script>
	<script type="text/javascript" src="./EasterEggs/R2D2Sound/R2D2sound.js"></script>
	<script type="text/javascript" src="./EasterEggs/C3POSound/C3POSound.js"></script>
	
	<!-- Favicon
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<?php include($folderFavicon.'favicon.php') ?>


</head>