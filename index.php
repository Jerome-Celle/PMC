<!DOCTYPE html>
<html lang="fr">
	<?php include('./head.php'); ?>
		
	<body>
	<script type="text/javascript">
	var tagPage = 'all_movies';
	</script>

	<?php include('./loader.php'); ?>
		<?php 
    $mainStyle = "accueil";
    $placeHolderHeader = "Que cherchez-vous?";
    $imageHeader = array('img/dsn/PMC_logo_w.svg');
    $imageSearchOption = 'img/dsn/PMC_icn_search_option.svg';
    include('./searchAndTri.php');
    ?>
		<div id="PMC_searchresults">
			<script type="text/javascript">
			showHint()
			</script>
		</div>

		<?php include('./navbar.php') ?>

		<div id='randomCercle'>                  
		</div>

<!-- 
      <div id='divEtoile'>
         <div class='etoile' style='left:100px; top:200px;'></div>
         <div class='etoile' style='left:250px; top:200px;'></div>
         <div class='etoile' style='left:50px; top:200px;'></div>
         <div class='etoile' style='left:300px; top:200px;'></div>
         <div class='etoile' style='left:150px; top:200px;'></div>
      </div>
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
			
		<script type="text/javascript" src="./js/menu.js"></script>
	</body>
</html>