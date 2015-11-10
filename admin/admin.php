<form action="addMovies.php" method="post">
    <fieldset>
	    <legend>Nom BDD:</legend>
		<input type="text" name="name" value="" placeholder="Champs id, etc..">
	</fieldset>
	<fieldset>
	    <legend>FR:</legend>
		Titre FR:
		<input type="text" name="titreFR" value="" placeholder="Titre au propre">
		
		Date Label FR:
		<input type="text" name="dateSortieFR" value="" placeholder="Date à afficher">
		
		Date FR:
		<input type="text" name="anneeFR" value="" placeholder="année">
		<input type="text" name="moisFR" value="" placeholder="mois">
		<input type="text" name="joursFR" value="" placeholder="jours">
	
	</fieldset>
	<fieldset>
	    <legend>US:</legend>
		Titre US:
		<input type="text" name="titreUS" value="">
		
		Date Label US:
		<input type="text" name="dateSortieUS" value="">
		
		Date US:
		<input type="text" name="anneeUS" value="">
		<input type="text" name="moisUS" value="">
		<input type="text" name="joursUS" value="">
	
	</fieldset>
	<fieldset>
    <legend>Portail et Tag:</legend>
		<select name="portail">
				<?php 
				include ("../connexion.php");
			    $query = "
			    SELECT * 
			    FROM Portail";
			    $sth = $dbh->prepare($query);
			    $sth->execute();
			    while ($Portail = $sth->fetch(PDO::FETCH_OBJ)) {
			    	echo ('<option value="'. $Portail->idPortail . '">' . $Portail->namePortail . '</option>');
			    }
				?>
		</select>
		<select name="tag">
				<option value='no_tag'>Pas de tag</option>
				<?php 
				include ("../connexion.php");
			    $query = "
			    SELECT * 
			    FROM Tag";
			    $sth = $dbh->prepare($query);
			    $sth->execute();
			    while ($Tag = $sth->fetch(PDO::FETCH_OBJ)) {
			    	echo ('<option value="'. $Tag->idTag . '">' . $Tag->nameTag . '</option>');
			    }
				?>
		</select>
	</fieldset>
	<input type="submit" value="Ajouter">
</form>