<?php
if (isset($_POST['q'])) {

    $requete = $_POST['q'];

    $PortailPage = $_POST['PortailPage'];

    if($PortailPage == 'all_movies'){
        $Portail = "1 = 1";
    } else{
        $Portail = "Portail.namePortail = '$PortailPage'";
    }

    if(isset($_POST['last']) && $_POST['last'] != NULL){
        $last = $_POST['last'];
    } else{
        $last = '19700101';
    }

    $ordreTri = $_POST['ordreTri'];

    $dbLangue = 'MoviesFR';

    include ("connexion.php");
    $query = "
    SELECT $dbLangue.* 
    FROM $dbLangue
        LEFT JOIN LinkMoviesTag
        ON $dbLangue.id = LinkMoviesTag.idMovies
        INNER JOIN Tag
        ON LinkMoviesTag.idTag = Tag.idTag
        LEFT JOIN LinkMoviesPortail
        ON $dbLangue.id = LinkMoviesPortail.idMovies
        INNER JOIN Portail
        ON LinkMoviesPortail.idPortail = Portail.idPortail
    WHERE (Tag.nameTag = '$requete' OR $dbLangue.titre LIKE '%$requete%')
          AND CONCAT($dbLangue.annee,$dbLangue.mois,$dbLangue.jour) > '$last'
          AND $Portail
    GROUP BY $dbLangue.id
    ORDER BY $ordreTri LIMIT 5";

    $sth = $dbh->prepare($query);
    //$sth->bindParam(':nameMovies', $_REQUEST['requete'], PDO::PARAM_STR, 20);
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
                </div>
            </div>
            <script>affiche("<?php echo $obj->annee?>","<?php echo $obj->mois?>","<?php echo $obj->jour?>", "<?php echo 'div#' . $obj->name ?>");</script>                        
        </div>
        <?php    
    }
}
?>