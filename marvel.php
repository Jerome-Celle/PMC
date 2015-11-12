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
		<div id="notfound">
			<div class="container">
				<div class="row">
					<div class="twelve columns">
						<h3>Tu n'as pas trouvé le film que tu recherches ?</h3>
						<p> Essayes une autre recherche ou envoie nous ta proposition d'ajout sur <a href="" alt="Proposition film">cette page</a></p>
					</div>
				</div>
			</div>
		</div>
		<?php include('navbar.php') ?>

		<!-- End Document
		–––––––––––––––––––––––––––––––––––––––––––––––––– -->
		<script type="text/javascript" src="./js/menu.js"></script>

	</body> 
</html>