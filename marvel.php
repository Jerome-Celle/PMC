<!DOCTYPE html>
<html lang="fr">
	<?php  
			$Portail = 'Marvel';
		$colorPortail = '#BE0F1E'; 
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
			$placeHolderHeader = array("Que cherchez-vous?");
			$directory = './img/dsn/logos/marvel/';
			$imageHeader = array_diff(scandir($directory,1), array('..', '.'));
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