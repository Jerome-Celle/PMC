<?php

$idMovies = $_POST['idMovies'];
include ("connexion.php");
    $query = "
DELETE FROM MoviesFR
WHERE id=$idMovies;

DELETE FROM MoviesUS
WHERE id=$idMovies;

DELETE FROM Tag
WHERE idMovies=$idMovies;

DELETE FROM Portail
WHERE idMovies=$idMovies;
 ";

    $sth = $dbh->prepare($query);
    $sth->execute();
?>