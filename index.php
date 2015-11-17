<!DOCTYPE html>
<html lang="fr">
	<?php  
		$Portail = 'all_movies';
		$colorPortail = '#604581';
		$headTitle = 'Supagog.com';
		$headDescritpion = '';
		$folderFavicon = 'img/dsn/favicon/home/';
		include('./php/head.php'); 
	?>

	<body>
		<script type="text/javascript">
			var PortailPage = 'all_movies';
		</script>

		<?php include('./php/loader.php'); ?>
		<?php 
			$mainStyle = "accueil";
			$placeHolderHeader = array("Que recherchez-vous?");
			$directory = './img/dsn/';
			$imageHeader = array('SPGG_logo_w.svg');
			include('./php/header.php');
		?>
		<div id="PMC_searchresults">
			<?php
			$Portail = 'all_movies';
			include('./php/firstSearch.php');
			?>
		</div>
		
		<?php include('./php/navbar.php') ?>

		<div id='randomCercle'>                  
		</div>


		<script type="text/javascript" src="./js/menu.js"></script>
	</body>
</html>