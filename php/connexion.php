<?php
try { // bloc de code pouvant générer des exceptions
    // connexion à la base de donn�e
    $sql_server = "noktefrlvpdb.mysql.db";
    $sql_database = "noktefrlvpdb";
    $sql_login = "noktefrlvpdb";
    $sql_password = "x9Mbfy9fZDYs";
    $dbh = new PDO('mysql:host=' . $sql_server . ';dbname=' . $sql_database, $sql_login, $sql_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // pour avoir des r�ponses en UTF-8
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));  // pour g�n�rer des exceptions en cas d'erreur
} catch (Exception $e) {
    echo 'Erreur : ' . $e->getMessage() . '<br /> : ' . $e->getCode();
    die();
}
?>