<!DOCTYPE html>
<html lang="fr">
	<?php  
			$Portail = 'Marvel';
		$colorPortail = '#BE0F1E'; 
		$headTitle = 'Supagog.com - Univers Marvel';
		$headDescritpion = '';
		$folderFavicon = 'img/dsn/favicon/marvel/';

		include('./php/head.php'); 
	?>
	<body>

		<script type="text/javascript">
			var PortailPage = 'Marvel';
		</script>


		<?php include('./php/loader.php'); ?>
		<?php
			$mainStyle = "marvel";		 
			$placeHolderHeader = array("Que cherchez-vous?");
			$directory = './img/dsn/logos/marvel/';
			$imageHeader = array_diff(scandir($directory,1), array('..', '.'));
			include('./php/header.php');
		?>

		<div id="PMC_searchresults">
			<?php
			$Portail = 'Marvel';
			include('./php/firstSearch.php');
			?>
		</div>
		
		<?php include('php/navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>