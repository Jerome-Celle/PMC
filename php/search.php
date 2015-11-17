<?php
include('./compteur.php');
if (isset($_GET['q'])) {

    $requete = $_GET['q'];

    $PortailPage = $_GET['PortailPage'];

    $dbLangue = 'MoviesFR';

    if($PortailPage == 'all_movies'){
        $Portail = "1 = 1";
    } else{
        $Portail = "Portail.namePortail = '$PortailPage'";
    }


    $ordreTri = $_GET['ordreTri'];
    $dateActuelle = new DateTime();
    if(isset($_GET['last']) && $_GET['last'] != NULL){
        $last = $_GET['last'];
    } else{
        if($ordreTri == 'titre'){
            $last = $dateActuelle->format('Ymd');
        } else {
            $last = '';
        }
    }
    if($ordreTri == 'titre'){
        $infinitScroll = "$dbLangue.name > '$last'";
    } else {
        $infinitScroll = "CONCAT($dbLangue.annee,$dbLangue.mois,$dbLangue.jour) > '$last'";
    }


    include ("./connexion.php");
    $query = "
    SELECT $dbLangue.* 
    FROM MoviesFR
        LEFT JOIN LinkMoviesPortail
        ON MoviesFR.id = LinkMoviesPortail.idMovies
        INNER JOIN Portail
        ON LinkMoviesPortail.idPortail = Portail.idPortail
        INNER JOIN MoviesUS
        ON MoviesUS.id = LinkMoviesPortail.idMovies
    WHERE (MoviesFR.titre LIKE '%$requete%' OR MoviesUS.titre LIKE '%$requete%')
          AND $infinitScroll
          AND $Portail
    GROUP BY $dbLangue.id
    ORDER BY $ordreTri LIMIT 5";
    //var_dump($query);
    $sth = $dbh->prepare($query);
    //$sth->bindParam(':nameMovies', $_REQUEST['requete'], PDO::PARAM_STR, 20);
    $sth->execute();
    $cpt = 0;
    while ($obj = $sth->fetch(PDO::FETCH_OBJ)) { 
        if($ordreTri == 'titre'){
            $id = $obj->name;
        } else {
            $id = $obj->annee . $obj->mois . $obj->jour;
        }
        if($cpt < 2 && $_GET['firstAnim'] == 1){
            $class = 'bg post hidden visible animated fadeInUp';
        } else {
            $class = 'bg post';
        }
        $cpt++;
        ?>
        <div id="<?php echo $id ?>" class="<?php echo $class ?>" style="background-image: url('img/movimg/SPGG_<?php echo $obj->name?>.png'); background-size: cover; background-position: center top;"> 
            <div id="movie" class="container">
                <div class="row">
                    <h4><?php echo $obj->titre?></h4>
                </div>
                <div class="row">
                    <h6 id="datemov"><em><?php echo $obj->dateSortie?></em></h6>
                </div>
                <div id="<?php echo 'cpt_' . $obj->name ?>" class="row">                
                    <?php affiche($obj->annee, $obj->mois, $obj->jour);?>
                </div>
            </div>
        </div>
    <?php    
    }
    if($cpt < 5){
        ?>
        <div id="notfound">
            <div class="container">
                <div class="row">
                    <div class="twelve columns">
                        <h3>Tu n'as pas trouvé le film que tu recherches ?</h3>
                        <p> Essayes une autre recherche ou envoie nous ta proposition d'ajout sur <a href="proposer-film.php" alt="Proposition film">cette page</a></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}
?>