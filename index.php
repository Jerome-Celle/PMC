<!DOCTYPE html>
<html lang="fr">
	<?php  
			$Portail = 'all_movies';
		$headTitle = 'Supagog.com';
		$headDescritpion = '';
		$headAuthor = '';
		include('./head.php'); 
	?>

	<body>
		<script type="text/javascript">
			var PortailPage = 'all_movies';
		</script>

		<?php include('./loader.php'); ?>
		<?php 
			$mainStyle = "accueil";
			$placeHolderHeader = array("Que recherchez-vous?");
			$directory = './img/dsn/';
			$imageHeader = array('SPGG_logo_w.svg');
			include('./header.php');
		?>
		<div id="PMC_searchresults">
			<?php
			$Portail = 'all_movies';
			include('./firstSearch.php');
			?>
		</div>

		<?php include('./navbar.php') ?>

		<div id='randomCercle'>                  
		</div>


		<script type="text/javascript" src="./js/menu.js"></script>
	</body>
</html>