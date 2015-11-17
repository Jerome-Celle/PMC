<!DOCTYPE html>
<html lang="fr">
	<?php 
			$Portail = 'DC Comics';
		$colorPortail = '#2D447A'; 
		$headTitle = 'Supagog.com - Univers DC Comics';
		$headDescritpion = '';
		$folderFavicon = 'img/dsn/favicon/DC/';
		include('./php/head.php'); 
	?>
	<body>

		<script type="text/javascript">
			var PortailPage = 'DC Comics';
		</script>


		<?php include('./php/loader.php'); ?>
		<?php
			$mainStyle = "dccomics";		 
			$placeHolderHeader = array("Que cherchez-vous sur Batman?");
			$directory = './img/dsn/logos/dc/';
			$imageHeader = array_diff(scandir($directory,1), array('..', '.'));
			include('./php/header.php');
		?>

		<div id="PMC_searchresults">
			<?php
			$Portail = 'DC Comics';
			include('./php/firstSearch.php');
			?>
		</div>
		
		<?php include('php/navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>
