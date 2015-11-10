<?php
$GLOBALS['variable'] = something;

$dbLangue = 'MoviesFR';

if($Portail == 'all_movies'){
    $Portail = "1 = 1";
} else{
    $Portail = "Portail.namePortail = '$Portail'";
}
include ("connexion.php");

$arrayTitre = array();

$query = "
SELECT $dbLangue.* 
FROM $dbLangue
    LEFT JOIN LinkMoviesPortail
    ON $dbLangue.id = LinkMoviesPortail.idMovies
    INNER JOIN Portail
    ON LinkMoviesPortail.idPortail = Portail.idPortail
WHERE  $Portail";
$sth = $dbh->prepare($query);
//$sth->bindParam(':nameMovies', $_GET['requete'], PDO::PARAM_STR, 20);
$sth->execute();
while ($obj = $sth->fetch(PDO::FETCH_OBJ)) {
    $arrayTitre[] = $obj->titre; 
}
?>