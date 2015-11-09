<?php
if (isset($_GET['q'])) {

    $requete = $_GET['q'];

    $PortailPage = $_GET['PortailPage'];

    $dbLangue = 'MoviesFR';

    if($PortailPage == 'all_movies'){
        $Portail = "1 = 1";
    } else{
        $Portail = "Portail.namePortail = '$PortailPage'";
    }


    if(isset($_GET['last']) && $_GET['last'] != NULL){
        $last = $_GET['last'];
    } else{
        $last = '';
    }

    $ordreTri = $_GET['ordreTri'];
    if($ordreTri == 'titre'){
        $infinitScroll = "$dbLangue.name > '$last'";
    } else {
        $infinitScroll = "CONCAT($dbLangue.annee,$dbLangue.mois,$dbLangue.jour) > '$last'";
    }


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
          AND $infinitScroll
          AND $Portail
    GROUP BY $dbLangue.id
    ORDER BY $ordreTri LIMIT 5";
    //var_dump($query);
    $sth = $dbh->prepare($query);
    //$sth->bindParam(':nameMovies', $_REQUEST['requete'], PDO::PARAM_STR, 20);
    $sth->execute();
    while ($obj = $sth->fetch(PDO::FETCH_OBJ)) { 
        if($ordreTri == 'titre'){
            $id = $obj->name;
        } else {
            $id = $obj->annee . $obj->mois . $obj->jour;
        }
        ?>
        <div id="<?php echo $id ?>" class="bg post" style="background-image: url('img/movimg/<?php echo $obj->name?>.png'); background-size: cover; background-position: center top;"> 
            <div id="movie" class="container">
                <div class="row">
                    <h4><?php echo $obj->titre?></h4>
                </div>
                <div class="row">
                    <h6 id="datemov"><em><?php echo $obj->dateSortie?></em></h6>
                </div>
                <div id="<?php echo 'cpt_' . $obj->name ?>" class="row">
                </div>
            </div>
            <script>affiche("<?php echo $obj->annee?>","<?php echo $obj->mois?>","<?php echo $obj->jour?>", "<?php echo 'div#' . 'cpt_' . $obj->name ?>");</script>                        
        </div>
        <?php    
    }
}
?>