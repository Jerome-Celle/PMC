<!DOCTYPE html>
<html lang="fr">
<?php include('./php/head.php'); ?>
<body>
  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

<?php include('./php/loader.php'); ?>

<div id="o-wrapper" class="o-wrapper">
	<div id="header">
	 	<div  class="container">
	 	<button id="c-button--slide-left"><img id="b_menu" class="c-button" src="img/dsn/PMC_icn_menu.svg" style="width: 30px;"></button>
      <div class="row">
        <div class="twelve columns">
 
    		      <a  id="home_logo" href="index.php"><img src="img/dsn/Logo_1.svg" alt="logo"></a>
    	  </div>
 		  </div>
 		  <div class="row">
    	  <div id="search_bar" class="twelve columns">
    		  <input class="u-full-width text" type="text" placeholder="Que recherchez vous ?" id="PMC_searchtopbar" name="q" autocomplete="off">
    	  </div>
 		  </div>
 		  <div id="tri_choice" class="row">
    	  	<div class="twelve columns">
          <label id="tri" for="ordreTri_date">
            <input id="ordreTri_date tri" type="radio" name="ordreTri" value="annee, mois, jour" checked/>
            Date
          </label> 

          <label id="tri" for="ordreTri_alphanumeric">
            <input id="ordreTri_alphanumeric tri" type="radio" name="ordreTri" value="titre"/>
            Alphabetique
          </label>
        </div>
		  </div>
	  </div>
  </div>  
  <div id="PMC_searchresults">
    <script type="text/javascript">
      showHint()
    </script>
  </div>
</div>

<nav id="c-menu--slide-left" class="c-menu c-menu--slide-left">
  <button class="c-menu__close"><img id="b_menu_close" src="img/dsn/PMC_icn_close.svg" style="width: 20px;"></button>
  <ul class="c-menu__items">
    <li class="c-menu__item"><a href="index.php" class="c-menu__link">Accueil</a></li>
    <li class="c-menu__item"><a href="marvel.php" class="c-menu__link"><img src="img/dsn/PCM_icn_menu_marvel.svg" style="width: 60px; margin-bottom: -5px;"></br>Portail Marvel</a></li>
    <li class="c-menu__item"><a href="dccomics.php" class="c-menu__link"><img src="img/dsn/PCM_icn_menu_dc.svg" style="width: 40px; margin-bottom: -5px;"></br>Portail DC Comics</a></li>
    <li class="c-menu__item"><a href="starwars.php" class="c-menu__link"><img src="img/dsn/PCM_icn_menu_starwars.svg" style="width: 70px; margin-bottom: -5px;"></br>Portail Star Wars</a></li>
    <li class="c-menu__item"><a href="#" class="c-menu__link">Contact</a></li>
  </ul>
</nav>

<div id="c-mask" class="c-mask"></div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
<script type="text/javascript" src="./js/menu.js"></script>

</body>
</html>