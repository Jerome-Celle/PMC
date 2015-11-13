<!DOCTYPE html>
<html lang="fr">
	<?php 
		$headTitle = 'Supagog.com - Proposer un film';
		$headDescritpion = '';
		include('./head.php'); 
		include('./head.php'); ?>

	<body id="proposit">
			<?php include('./loader.php'); ?>

		<div id="o-wrapper" class="o-wrapper">
				<div  class="container">
					<button id="c-button--slide-left"><img id="b_menu" class="c-button" src="img/dsn/PMC_icn_menu.svg" style="width: 30px;"></button>
					<div class="row">
						<div class="twelve columns">
							<a id="home_logo" href=""><img src="img/dsn/SPGG_logo_w.svg" alt="logo"></a>
						</div>
					</div>
					<div class="row">
						<div class="twelve columns">
							<h6>PROPOSER UN FILM</h6>
						</div>
					</div>
				
				<div class="row">
				<div class="twelve columns">
					<p style="color:#ffffff; font-weight: 300;">
						Sur Supagog.com nous tentons de vous tenir informé des dates de sorties des films que vous attendez. Pour nous aider dans notre mission, vous pouvez nous proposer des films grâce à ce formulaire. Notre équipe ajoutera vos propositions à notre base de données.					
					</p>
				</div>
				</div>
				<form>
				<div class="row">
					<div class="six columns">
						<label for="emailInput">Email</label>
						<input class="u-full-width" type="email" placeholder="bruce@wayne-enterprise.com"id="emailInput">
					</div>
					<div class="six columns">
						<label for="movieTitle">Titre du film</label>
						<input type="text" class="u-full-width" id="movieTitle"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="six columns">
						<label for="movieDateFR">Date de Sortie FR</label>
						<input type="text" class="u-full-width" id="movieDateFR" placeholder="JJ / MM / AAAA">
					</div>
					<div class="six columns">					
						<label for="movieDateUS">Date de Sortie US</label>
						<input type="text" class="u-full-width" id="movieDateUS" placeholder="JJ / MM / AAAA">
					</div>
				</div>
				<div class="row">
					<div class="twelve columns">
					<input class="movieSub" type="submit" value="Envoyer">						
					</div>
				</div>		
				</form>	
		</div>

		<?php include('./navbar.php') ?>

		<script type="text/javascript" src="./js/menu.js"></script>
	</body>
</html>