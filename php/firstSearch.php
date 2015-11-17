<?
include('./php/compteur.php');
$last = '19700101';
$dbLangue = 'MoviesFR';
$dateActuelle = new DateTime();
$last = $dateActuelle->format('Ymd');

if($Portail == 'all_movies'){
    $Portail = "1 = 1";
} else{
    $Portail = "Portail.namePortail = '$Portail'";
}

include ("php/connexion.php");
$query = "
SELECT $dbLangue.* 
FROM $dbLangue
    LEFT JOIN LinkMoviesPortail
    ON $dbLangue.id = LinkMoviesPortail.idMovies
    INNER JOIN Portail
    ON LinkMoviesPortail.idPortail = Portail.idPortail
WHERE CONCAT($dbLangue.annee,$dbLangue.mois,$dbLangue.jour) > '$last'
      AND $Portail
GROUP BY $dbLangue.id
ORDER BY annee, mois, jour LIMIT 5;";
//var_dump($query);
$sth = $dbh->prepare($query);
//$sth->bindParam(':nameMovies', $_GET['requete'], PDO::PARAM_STR, 20);
$sth->execute();
    $cpt = 0;
while ($obj = $sth->fetch(PDO::FETCH_OBJ)) {
        if($cpt < 2){
            $class = 'bg post hidden visible animated fadeInUp';
        } else {
            $class = 'bg post';
        }
        $cpt++;
    ?>
    <div id="<?php echo $obj->annee . $obj->mois . $obj->jour?>" class="<?php echo $class ?>" style="background-image: url('img/movimg/SPGG_<?php echo $obj->name?>.png'); background-size: cover; background-position: center top;"> 
        <div id="movie" class="container">
            <div class="row">
                <h4><?php echo $obj->titre?></h4>
            </div>
            <div class="row">
                <h6 id="datemov"><em><?php echo $obj->dateSortie?></em></h6>
            </div>
            <div class="row">              
                    <?php affiche($obj->annee, $obj->mois, $obj->jour);?>
            </div>
        </div>
        
    </div>
    <?php    
}

?>