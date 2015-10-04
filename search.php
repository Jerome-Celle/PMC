<?php
if (isset($_GET['q']) && $_GET['q'] != NULL) {
    $requete = $_GET['q'];
    if(isset($_GET['last']) && $_GET['last'] != NULL){
        $last = $_GET['last'];
    } else{
        $last = '19700101';
    }
    $lim = "";
    if($requete == 'all_movies'){
        $lim = 'LIMIT 5';
        $requete = '%';
    }
    include ("/php/connexion.php");
    //$query = "SELECT * FROM Popmoviescountdown WHERE name LIKE '%$requete%' ORDER BY dateSortie ASC";
    $query = "
    SELECT Popmoviescountdown.* 
    FROM Popmoviescountdown, Tag 
    WHERE ((Popmoviescountdown.tag = Tag.idTag AND Tag.nameTag = '$requete') 
            OR Popmoviescountdown.titre LIKE '%$requete%')
            AND CONCAT(Popmoviescountdown.annee,Popmoviescountdown.mois,Popmoviescountdown.jour) > '$last'
    GROUP BY Popmoviescountdown.id
    ORDER BY annee, mois, jour ASC";
    $sth = $dbh->prepare($query);
    //$sth->bindParam(':nameMovies', $_REQUEST['requete'], PDO::PARAM_STR, 20);
    $sth->execute();
    while ($obj = $sth->fetch(PDO::FETCH_OBJ)) {
        ?>
        <div id="<?php echo $obj->annee . $obj->mois . $obj->jour?>" class="bg post" style="background-image: url('img/movimg/<?php echo $obj->name?>.png'); background-size: cover; background-position: center center;"> 
            <div id="movie" class="container">
                <div class="row">
                    <h4><?php echo $obj->titre?></h4>
                </div>
                <div class="row">
                    <h6 id="datemov"><em><?php echo $obj->dateSortie?></em></h6>
                </div>
                <div id="<?php echo "tr_" . $obj->name ?>" class="row">
                </div>
            </div>
            <script>affiche("<?php echo $obj->annee?>","<?php echo $obj->mois?>","<?php echo $obj->jour?>", "<?php echo 'tr_' . $obj->name ?>");</script>                        
        </div>
        <?php    
    }
    ?>
    <script type="text/javascript">
      jQuery(document).ready(function() {
        jQuery('.post').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible
            offset: 100    
          });   
        });            
      //infiniteScroll();
    </script>
    <?php
}
?>