<?php 
include('./arrayTitre.php');
$index;
$titre;
$placeholder = $arrayTitre[rand(0,sizeOf($arrayTitre)-1)];
array_splice($arrayTitre, 2, 1);
$titre = $arrayTitre[rand(0,sizeOf($arrayTitre)-1)];
array_splice($arrayTitre, 2, 1);
$placeholder = $placeholder . ', ' . $titre;
$titre = $arrayTitre[rand(0,sizeOf($arrayTitre)-1)];
array_splice($arrayTitre, 2, 1);
$placeholder = $placeholder . ', ' . $titre . ', ...';

;?>
<div id="o-wrapper" class="o-wrapper">
   <div id="header" class="<?php echo $mainStyle?>">
      <div  class="container">
         <button id="c-button--slide-left"><img id="b_menu" class="c-button" src="img/dsn/PMC_icn_menu.svg" style="width: 30px;"></button>
         <div class="row">
            <div class="twelve columns">
               <a id="home_logo" href=""><img src="<?php echo($directory.$imageHeader[rand(0,sizeOf($imageHeader)-1)])?>" alt="logo"></a>
            </div>
         </div>
         <div class="row">
            <div id="search_bar" class="twelve columns">
               <input class="u-full-width <?php echo $mainStyle?>" type="text" placeholder="<?php echo ($placeholder)?>" id="PMC_searchtopbar" name="q" onkeyup="" autocomplete="off"/>
               <img id="search_option" src="img/dsn/PMC_icn_search_option.svg" width="25px;"/>
            </div>
         </div>
      </div>
      <div id="tri_choice" class="row">
         <div class="twelve columns">
            <ul>
               <li><em>Trier par :</em></li>
               <li><input id="ordreTri_date" type="radio" name="ordreTri" value="annee, mois, jour" checked/></li>
               <li><label id="tri" for="ordreTri_date">Date</label></li>
               <li><input id="ordreTri_alphanumeric" type="radio" name="ordreTri" value="titre"/></li>
               <li><label id="tri" for="ordreTri_alphanumeric">Ordre Alphabétique</label></li>
            </ul>
         </div>
      </div> 
   </div>
</div>