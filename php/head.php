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
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/dsn/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/dsn/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/dsn/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/dsn/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/dsn/favicon/apple-touch-icon-60x60.png" />
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/dsn/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/dsn/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/dsn/favicon/apple-touch-icon-152x152.png" />
	<link rel="icon" type="image/png" href="img/dsn/favicon/favicon-196x196.png" sizes="196x196" />
	<link rel="icon" type="image/png" href="img/dsn/favicon/favicon-96x96.png" sizes="96x96" />
	<link rel="icon" type="image/png" href="img/dsn/favicon/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="img/dsn/favicon/favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/png" href="img/dsn/favicon/favicon-128.png" sizes="128x128" />
	<meta name="application-name" content="&nbsp;"/>
	<meta name="msapplication-TileColor" content="#604581" />
	<meta name="msapplication-TileImage" content="img/dsn/favicon/mstile-144x144.png" />
	<meta name="msapplication-square70x70logo" content="img/dsn/favicon/mstile-70x70.png" />
	<meta name="msapplication-square150x150logo" content="img/dsn/favicon/mstile-150x150.png" />
	<meta name="msapplication-wide310x150logo" content="img/dsn/favicon/mstile-310x150.png" />
	<meta name="msapplication-square310x310logo" content="img/dsn/favicon/mstile-310x310.png" />


</head>