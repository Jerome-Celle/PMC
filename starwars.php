<!DOCTYPE html>
<html lang="fr">
   <?php include('./head.php'); ?>
   <body>

      <script type="text/javascript">
         var tagPage = 'Star Wars';
      </script>
      

	<?php include('./loader.php'); ?>
		<?php
	   $mainStyle = "starwars";  
    $placeHolderHeader = "C3PO, que puisse-je pour vous?";
    $imageHeader = array('img/dsn/logos/starwars/PMC_decli_swempire_w.svg',
                         'img/dsn/logos/starwars/PMC_decli_swfirstorder_w.svg',
                         'img/dsn/logos/starwars/PMC_decli_swrebel_w.svg');
    $imageSearchOption = 'img/dsn/PMC_icn_search_option.svg';
    include('./searchAndTri.php');
    ?>

      <div id="PMC_searchresults">
         <script type="text/javascript">
            showHint("Star Wars")
         </script>
      </div>

      <?php include('navbar.php') ?>

      <!-- End Document
      –––––––––––––––––––––––––––––––––––––––––––––––––– -->
      <script type="text/javascript" src="./js/menu.js"></script>

   </body>
</html>