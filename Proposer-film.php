<!DOCTYPE html>
<html lang="fr">
	<?php 
		$headTitle = 'Supagog.com - Proposer un film';
		$headDescritpion = '';
		$folderFavicon = 'img/dsn/favicon/home/';
		include('./php/head.php'); ?>

	<body id="proposit">
			<?php include('./php/loader.php'); ?>

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
					<p style="color:#ffffff; font-weight: 300; margin-bottom: 25px;">
						Sur Supagog.com nous tentons de vous tenir informé des dates de sorties des films que vous attendez. Pour nous aider dans notre mission, vous pouvez nous proposer des films grâce à ce formulaire. Notre équipe ajoutera vos propositions à notre base de données.					
					</p>
				</div>
				</div>
				<form action='' method='POST'>
				<div class="row">
					<div class="six columns">
						<label for="emailInput">Email *</label>
						<input class="u-full-width" type="email" placeholder="bruce@wayne-enterprises.com" id="emailInput" name="emailInput" required>
					</div>
					<div class="six columns">
						<label for="movieTitle">Titre du film *</label>
						<input type="text" class="u-full-width" id="movieTitle" name="movieTitle" required></textarea>
					</div>
				</div>
				<div class="row">
					<div class="six columns">
						<label for="movieDateFR">Date de Sortie FR</label>
						<input type="text" class="u-full-width" id="movieDateFR" name="movieDateFR" placeholder="JJ / MM / AAAA">
					</div>
					<div class="six columns">					
						<label for="movieDateUS">Date de Sortie US</label>
						<input type="text" class="u-full-width" id="movieDateUS" name="movieDateUS" placeholder="JJ / MM / AAAA">
					</div>
				</div>
				<div class="row">
					<div class="three columns">
						<p style="color:#ffffff; font-weight: 300; text-align: left;"><em>* Champs obligatoires</em></p>					
					</div>
				</div>		
				<div class="row">
					<div class="twelve columns">
					<input class="movieSub" type="submit" value="Envoyer">						
					</div>
				</div>	
				</form>
				<div id="formvalid">
					<p style="margin-top: 1rem;">Votre message a bien été envoyé. Votre proposition de film sera traitée dans les meilleurs délais.</p>
			</div>

		</div>
		<?php include('./php/navbar.php') ?>

		<?php
		if(isset($_POST['emailInput']) && isset($_POST['movieTitle'])){
			$to = "jeffyer38130@gmail.com";
			$subject = "Test sugestion mail";
			$txt = "Hello world! voila le film à ajouter " . $_POST['movieTitle'];
			$headers = "From: ".$_POST['emailInput'] . "\r\n" .
			"CC: somebodyelse@example.com";

			mail($to,$subject,$txt,$headers);
			?>
			<div id="formvalid">
					<p style="margin-top: 1rem;">Votre message a bien été envoyé. Votre proposition de film sera traitée dans les meilleurs délais.</p>
			</div>
			<?php
		}
		?>

		<script type="text/javascript" src="./js/menu.js"></script>
	</body>
</html>