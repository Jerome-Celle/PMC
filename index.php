<!DOCTYPE html>
<html lang="fr">
	<?php  
		$Portail = 'all_movies';
		$colorPortail = '#604581';
		$headTitle = 'Supagog.com';
		$headDescritpion = '';
		include('./head.php'); 
	?>

	<body>
		<script type="text/javascript">
			var PortailPage = 'all_movies';
		</script>

		<?php include('./loader.php'); ?>
		<?php 
			$mainStyle = "accueil";
			$placeHolderHeader = array("Que recherchez-vous?");
			$directory = './img/dsn/';
			$imageHeader = array('SPGG_logo_w.svg');
			include('./header.php');
		?>
		<div id="PMC_searchresults">
			<?php
			$Portail = 'all_movies';
			include('./firstSearch.php');
			?>
		</div>
		<div id="notfound">
			<div class="container">
				<div class="row">
					<div class="twelve columns">
						<h3>Tu n'as pas trouvé le film que tu recherches ?</h3>
						<p> Essayes une autre recherche ou envoie nous ta proposition d'ajout sur <a href="proposer-film.php" alt="Proposition film">cette page</a></p>
					</div>
				</div>
			</div>
		</div>
		<?php include('./navbar.php') ?>

		<div id='randomCercle'>                  
		</div>


		<script type="text/javascript" src="./js/menu.js"></script>
	</body>
</html>