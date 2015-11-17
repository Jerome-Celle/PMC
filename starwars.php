<!DOCTYPE html>
<html lang="fr">
	<?php  
			$Portail = 'Star Wars';
		$colorPortail = '#1E242A'; 
		$headTitle = 'Supagog.com - Univers Star Wars';
		$folderFavicon = 'img/dsn/favicon/sw/';
		$headDescritpion = '';
		include('./php/head.php'); 
	?>
	<body>

		<script type="text/javascript">
			var PortailPage = 'Star Wars';
		</script>

		<?php include('./php/loader.php'); ?>

		<?php
			$mainStyle = "starwars";  
			$placeHolderHeader = array("C3PO, que puis-je pour vous?");
			$directory = './img/dsn/logos/starwars/';
			$imageHeader = array_diff(scandir($directory,1), array('..', '.'));
			include('./php/header.php');
		?>

		<div id="PMC_searchresults">
			<?php
			$Portail = 'Star Wars';
			include('./php/firstSearch.php');
			?>
		</div>
		<?php include('php/navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body>
</html>