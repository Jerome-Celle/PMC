<?
include('./compteur.php');
$last = '19700101';
$dbLangue = 'MoviesFR';

if($Portail == 'all_movies'){
    $Portail = "1 = 1";
} else{
    $Portail = "Portail.namePortail = '$Portail'";
}

include ("connexion.php");
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

$sth = $dbh->prepare($query);
//$sth->bindParam(':nameMovies', $_GET['requete'], PDO::PARAM_STR, 20);
$sth->execute();
while ($obj = $sth->fetch(PDO::FETCH_OBJ)) {
    ?>
    <div id="<?php echo $obj->annee . $obj->mois . $obj->jour?>" class="bg post" style="background-image: url('img/movimg/<?php echo $obj->name?>.png'); background-size: cover; background-position: center top;"> 
        <div id="movie" class="container">
            <div class="row">
                <h4><?php echo $obj->titre?></h4>
            </div>
            <div class="row">
                <h6 id="datemov"><em><?php echo $obj->dateSortie?></em></h6>
            </div>
            <div id="<?php echo $obj->name ?>" class="row">              
                    <?php affiche($obj->annee, $obj->mois, $obj->jour);?>
            </div>
        </div>
        
    </div>
    <?php    
}

?>