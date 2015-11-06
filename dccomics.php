<!DOCTYPE html>
<html lang="fr">
	<?php  
		$headTitle = '';
		$headDescritpion = '';
		$headAuthor = '';
		include('./head.php'); 
	?>
	<body>

		<script type="text/javascript">
			var PortailPage = 'DC Comics';
		</script>


		<?php include('./loader.php'); ?>
		<?php
			$mainStyle = "dccomics";		 
			$placeHolderHeader = "Que cherchez-vous sur Batman?";
			$imageHeader = array('img/dsn/logos/dc/PMC_decli_batman_w.svg',
										'img/dsn/logos/dc/PMC_decli_greenlantern_w.svg',
										'img/dsn/logos/dc/PMC_decli_superman_w.svg');
			$imageSearchOption = 'img/dsn/PMC_icn_search_option.svg';
			include('./header.php');
		?>

		<div id="PMC_searchresults">
			<script type="text/javascript">
				showHint("DC Comics")
			</script>
		</div>

		<?php include('navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>
