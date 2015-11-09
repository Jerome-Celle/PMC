<!DOCTYPE html>
<html lang="fr">
	<?php  
		$headTitle = 'Supagog.com - Univers Star Wars';
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
			$directory = './img/dsn/logos/starwars/';
			$arrayTemp = array_diff(scandir($directory), array('..', '.'));
			$imageHeader = array_splice($arrayTemp, 0, 2);
			$imageSearchOption = 'img/dsn/PMC_icn_search_option.svg';
			include('./header.php');
		?>

		<div id="PMC_searchresults">
			<?php
			$Portail = 'Star Wars';
			include('./firstSearch.php');
			?>
		</div>

		<?php include('navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body>
</html>