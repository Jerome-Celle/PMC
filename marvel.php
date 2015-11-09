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
			$directory = './img/dsn/logos/marvel/';
			$arrayTemp = array_diff(scandir($directory), array('..', '.'));
			$imageHeader = array_splice($arrayTemp, 0, 2);
			include('./header.php');
		?>

		<div id="PMC_searchresults">
			<?php
			$Portail = 'Marvel';
			include('./firstSearch.php');
			?>
		</div>

		<?php include('navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>