<?php
if(isset($_POST[''])){

	//données comumnes
	$name = $_POST['name'];

	//données FR
	$titreFR      = $_POST['titreFR'];
	$dateSortieFR = $_POST['dateSortieFR'];
	$anneeFR      = $_POST['anneeFR'];
	$moisFR       = $_POST['moisFR'];
	$joursFR      = $_POST['joursFR'];

	//données US
	$titreUS      = $_POST['titreUS'];
	$dateSortieUS = $_POST['dateSortieUS'];
	$anneeUS      = $_POST['anneeUS'];
	$moisUS       = $_POST['moisUS'];
	$joursUS      = $_POST['joursUS'];

	//tag et portail
	$tag = $_POST['tag'];
	$portail = $_POST['portail'];


	include ("connexion.php");
    $query = "
	INSERT INTO MoviesFR ('name', 'dateSortie', 'titre', 'annee', 'mois', 'jour')
	VALUES ($name, $dateSortieFR ,$anneeFR ,$moisFR ,$joursFR );";

    $sth = $dbh->prepare($query);
    $sth->execute();

    $sth = $dbh->prepare('SELECT id FROM MoviesFR WHERE name = $name');
    $sth->execute();
    $movie = $sth->fetch(PDO::FETCH_OBJ)
	$idMovies = $movie->id;

    $query = "
	INSERT INTO MoviesUS ('id','name', 'dateSortie', 'titre', 'annee', 'mois', 'jour')
	VALUES ($idMovies, $name, $dateSortieFR ,$anneeFR ,$moisFR ,$joursFR );
    
	INSERT INTO LinkMoviesTag ('idMovies', 'idPortail')
	VALUES ($idMovies, $tag);


	INSERT INTO LinkMoviesPortail ('idMovies', 'idPortail')
	VALUES ($idMovies, $portail);

    ";

    $sth = $dbh->prepare($query);
    $sth->execute();


}
?>