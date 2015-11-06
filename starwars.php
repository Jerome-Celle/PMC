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
			var PortailPage = 'Star Wars';
		</script>

		<?php include('./loader.php'); ?>

		<?php
			$mainStyle = "starwars";  
			$placeHolderHeader = "C3PO, que puis-je pour vous?";
			$imageHeader = array('img/dsn/logos/starwars/PMC_decli_swempire_w.svg',
								'img/dsn/logos/starwars/PMC_decli_swfirstorder_w.svg',
								'img/dsn/logos/starwars/PMC_decli_sw_jedi_w.svg',
								'img/dsn/logos/starwars/PMC_decli_sw_sith_w.svg',
								'img/dsn/logos/starwars/PMC_decli_swrebel_w.svg');
			$imageSearchOption = 'img/dsn/PMC_icn_search_option.svg';
			include('./header.php');
		?>

		<div id="PMC_searchresults">
			<script type="text/javascript">
				showHint("Star Wars")
			</script>
		</div>

		<?php include('navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body>
</html>