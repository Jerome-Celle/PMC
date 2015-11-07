<!DOCTYPE html>
<html lang="fr">
	<?php  
		$headTitle = 'Supagog.com - Univers Disney';
		$headDescritpion = '';
		$headAuthor = '';
		include('./head.php'); 
	?>
	<body>

		<script type="text/javascript">
			var PortailPage = 'Disney';
		</script>


		<?php include('./loader.php'); ?>
		<?php
			$mainStyle = "disney";		 
			$placeHolderHeader = "Que cherchez-vous?";
			$imageHeader = array();
			include('./header.php');
		?>

		<div id="PMC_searchresults">
			<script type="text/javascript">
				showHint()
			</script>
		</div>

		<?php include('navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>