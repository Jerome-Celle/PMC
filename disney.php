<!DOCTYPE html>
<html lang="fr">
	<?php  
			$Portail = 'Disney';
		$colorPortail = '#1EAEDB'; 
		$headTitle = 'Supagog.com - Univers Disney';
		$headDescritpion = '';
		$folderFavicon = 'img/dsn/favicon/disney/';
		include('./php/head.php'); 
	?>
	<body>

		<script type="text/javascript">
			var PortailPage = 'Disney';
		</script>


		<?php include('./php/loader.php'); ?>
		<?php
			$mainStyle = "disney";		 
			$placeHolderHeader = array("Que cherchez-vous?");
			$directory = './img/dsn/logos/disney/';
			$imageHeader = array_diff(scandir($directory,1), array('..', '.'));
			include('./php/header.php');
		?>

		<div id="PMC_searchresults">
			<?php
			$Portail = 'Disney';
			include('./php/firstSearch.php');
			?>
		</div>
		
		<?php include('php/navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>