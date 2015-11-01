<?php
if (isset($_POST['q'])) {

    $requete = $_POST['q'];

    $tagPage = $_POST['tagPage'];

    if($tagPage == 'all_movies'){
        $condTag = "1 = 1";
    } else{
        $condTag = "Tag.nameTag = '$tagPage'";
    }

    if(isset($_POST['last']) && $_POST['last'] != NULL){
        $last = $_POST['last'];
    } else{
        $last = '19700101';
    }

    $ordreTri = $_POST['ordreTri'];

    include ("connexion.php");
    //$query = "SELECT * FROM Popmoviescountdown WHERE name LIKE '%$requete%' ORDER BY dateSortie ASC";
    $query = "
    SELECT Popmoviescountdown.* 
    FROM Popmoviescountdown, Tag 
    WHERE Popmoviescountdown.tag = Tag.idTag 
            AND (Tag.nameTag = '$requete' OR Popmoviescountdown.titre LIKE '%$requete%')
            AND CONCAT(Popmoviescountdown.annee,Popmoviescountdown.mois,Popmoviescountdown.jour) > '$last'
            AND $condTag
    GROUP BY Popmoviescountdown.id
    ORDER BY $ordreTri";

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
                <div id="<?php echo "" . $obj->name ?>" class="row">
                </div>
            </div>
            <script>affiche("<?php echo $obj->annee?>","<?php echo $obj->mois?>","<?php echo $obj->jour?>", "<?php echo 'div#' . $obj->name ?>");</script>                        
        </div>
        <?php    
    }
    ?>
    <script type="text/javascript">
      $(document).ready(function() {
        $('.post').addClass("hidden").viewportChecker({
          classToAdd: 'visible animated fadeInUp', // Class to add to the elements when they are visible
            offset: 100    
          });   
        });            
    </script>
    <?php
}
?>