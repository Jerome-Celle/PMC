<!DOCTYPE html>
<html lang="fr">
	<?php include('./head.php'); ?>

	<body>
		<script type="text/javascript">
			var PortailPage = 'all_movies';
		</script>

		<div id="o-wrapper" class="o-wrapper">
			<div id="header" class="accueil">
				<div  class="container">
					<button id="c-button--slide-left"><img id="b_menu" class="c-button" src="img/dsn/PMC_icn_menu.svg" style="width: 30px;"></button>
					<div class="row">
						<div class="twelve columns">
							<a id="home_logo" href=""><img src="img/dsn/PMC_logo_w.svg" alt="logo"></a>
						</div>
					</div>
					<div class="row">
						<div class="twelve columns">
							<h6 style="font-size: 25px; margin-top:-10px; letter-spacing: 4px; ">AJOUTER UN FILM</h6>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="PMC_searchresults" class="container">
			<div class="row">
				<div class="four columns">
					<p style="color:#ffffff; font-weight: 300;">
						Sur Pop Movies Countdowns nous tentons de vous tenir informé des dates de sorties des films que vous aimez et attendez. Pour nous aider dans notre mission, vous pouvez nous proposer des films grâce à ce formulaire. Notre équipe ajoutera vos propositions à notre base de données dans les meilleurs délais.
					</p>
				</div>
				<div class="eight columns">	
				</div>
			</div>
		</div>

		<?php include('./navbar.php') ?>

		<script type="text/javascript" src="./js/menu.js"></script>
	</body>
</html>