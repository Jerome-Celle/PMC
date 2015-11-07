<!DOCTYPE html>
<html lang="fr">
	<?php  
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
			$placeHolderHeader = "Que recherchez-vous?";
			$imageHeader = array('img/dsn/SPGG_logo_w.svg');
			$imageSearchOption = 'img/dsn/PMC_icn_search_option.svg';
			include('./header.php');
		?>
		<div id="PMC_searchresults">
			<script type="text/javascript">
				showHint()
			</script>
		</div>

		<?php include('./navbar.php') ?>

		<div id='randomCercle'>                  
		</div>


		<script type="text/javascript" src="./js/menu.js"></script>
	</body>
</html>