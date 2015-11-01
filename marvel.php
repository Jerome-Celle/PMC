<!DOCTYPE html>
<html lang="fr">
   <?php include('./head.php'); ?>
   <body>

      <script type="text/javascript">
         var tagPage = 'Marvel';
      </script>

      
	<?php include('./loader.php'); ?>
		<?php
	  $mainStyle = "marvel";		 
    $placeHolderHeader = "Que cherchez-vous?";
    $imageHeader = array('img/dsn/PMC_logo_marvel_w.svg');
    $imageSearchOption = 'img/dsn/PMC_icn_search_option_marvel.svg';
    include('./searchAndTri.php');
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