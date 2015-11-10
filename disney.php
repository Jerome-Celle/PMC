<!DOCTYPE html>
<html lang="fr">
	<?php  
			$Portail = 'Disney';
		$colorPortail = '#1EAEDB'; 
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
			$placeHolderHeader = array("Que cherchez-vous?");
			$directory = './img/dsn/logos/disney/';
			$imageHeader = array_diff(scandir($directory,1), array('..', '.'));
			include('./header.php');
		?>

		<div id="PMC_searchresults">
			<?php
			$Portail = 'Disney';
			include('./firstSearch.php');
			?>
		</div>

		<?php include('navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>