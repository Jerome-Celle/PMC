<!DOCTYPE html>
<html lang="fr">
	<?php  
			$Portail = 'Star Wars';
		$colorPortail = '#1E242A'; 
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
			$placeHolderHeader = array("C3PO, que puis-je pour vous?");
			$directory = './img/dsn/logos/starwars/';
			$imageHeader = array_diff(scandir($directory,1), array('..', '.'));
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