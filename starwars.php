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