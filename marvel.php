<!DOCTYPE html>
<html lang="fr">
	<?php  
		$headTitle = 'Supagog.com - Univers Marvel';
		$headDescritpion = '';
		$headAuthor = '';
		include('./head.php'); 
	?>
	<body>

		<script type="text/javascript">
			var PortailPage = 'Marvel';
		</script>


		<?php include('./loader.php'); ?>
		<?php
			$mainStyle = "marvel";		 
			$placeHolderHeader = "Que cherchez-vous?";
			$imageHeader = array('img/dsn/logos/marvel/SPGG_decli_avengers_w.svg',
								'img/dsn/logos/marvel/SPGG_decli_captain_w.svg',
								'img/dsn/logos/marvel/SPGG_decli_shield_w.svg',
								'img/dsn/logos/marvel/SPGG_decli_ironman_w.svg');
			$imageSearchOption = 'img/dsn/PMC_icn_search_option_marvel.svg';
			include('./header.php');
		?>

		<div id="PMC_searchresults">
			<script type="text/javascript">
				showHint()
			</script>
		</div>

		<?php include('navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>