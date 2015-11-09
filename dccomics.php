<!DOCTYPE html>
<html lang="fr">
	<?php  
		$headTitle = 'Supagog.com - Univers DC Comics';
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
			$directory = './img/dsn/logos/dc/';
			$arrayTemp = array_diff(scandir($directory), array('..', '.'));
			$imageHeader = array_splice($arrayTemp, 0, 2);
			include('./header.php');
		?>

		<div id="PMC_searchresults">
			<?php
			$Portail = 'DC Comics';
			include('./firstSearch.php');
			?>
		</div>

		<?php include('navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>
