<?php
 function affiche($p_annee, $p_mois, $p_jour) {
    $dateActuelle = new DateTime();
    $dateEvenement;

    if($p_mois == 99){
        $dateEvenement = new DateTime($p_annee . "-01-01");
        $nbYears++;
    } 
    else if($p_jour == 99){
        $dateEvenement = new DateTime($p_annee . "-" . $p_mois . "-01");
        $nbMois++;
    } 
    else{
        $dateEvenement = new DateTime($p_annee . "-" . $p_mois . "-" . $p_jour);
    }

    $dateDiff = $dateActuelle->diff($dateEvenement);


    $nbYears = $dateDiff->format('%y');

    if($p_mois == 99){
        $nbMois = "?";
        $nbYears++;
    } else{
        $nbMois = $dateDiff->format('%m');        
    }
    if($p_jour == 99){
        $nbJours = "?";
        $nbMois++;
    }else{
        $nbJours = $dateDiff->format('%d') + 1;
    }

    if($dateActuelle->format('%d') == $dateEvenement->format('%d')){
        $nbMois++;
        $nbJours = 0;
    }
    if($nbMois == 12){
        $nbYears ++;
        $nbMois = 0;
    }


    $keyWordYear = $nbYears < 2 ?'ANNÉE' : 'ANNÉES';
    $keyWordDay  = $nbJours < 2 || p_jour == 99 ?'JOUR' : 'JOURS';


    echo("<table id='countdown_table'>".
    "<tbody>" .
    "<tr>" .
    "<td><h1>" . $nbYears . "</h1></td>" .
    "<td><h1>" . $nbMois . "</h1></td>" .
    "<td><h1>" . $nbJours . "</h1></td>" .
    "</tr>" .
    "<tr>" .
    "<td><h6>" . $keyWordYear . "</h6></td>" .
    "<td><h6>" . "MOIS" . "</h6></td>" .
    "<td><h6>" . $keyWordDay . "</h6></td>" .
    "</tr>" .
    "</tbody>" .
    "</table>");
}
    ?>