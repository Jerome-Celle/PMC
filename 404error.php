<!DOCTYPE html>
<html lang="fr">
	<?php 
		$headTitle = 'Supagog.com - Proposer un film';
		$headDescritpion = '';
		$folderFavicon = 'img/dsn/favicon/home/';
		include('./php/head.php'); ?>

	<body id="er404">
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
							<h6>404 ERROR</h6>
							<h3>These aren't the droids you're looking for.</h3>
						</div>
					</div>
				</div>
		</div>
		<img id="imger404" src="img/dsn/bg_404er.png" width="100%">
		<?php include('./php/navbar.php') ?>
	<script type="text/javascript" src="./js/menu.js"></script>
	</body>
</html>