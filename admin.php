<form action="action_page.php" method="post">
    <fieldset>
	    <legend>Nom BDD:</legend>
		<input type="text" name="nameFR" value="">
	</fieldset>
	<fieldset>
	    <legend>FR:</legend>
		Nom FR:
		<input type="text" name="nameFR" value="">
		
		Date Label FR:
		<input type="text" name="nameFR" value="">
		
		Date FR:
		<input type="text" name="nameFR" value="">
		<input type="text" name="nameFR" value="">
		<input type="text" name="nameFR" value="">
	
	</fieldset>
	<fieldset>
	    <legend>US:</legend>
		Nom US:
		<input type="text" name="nameFR" value="">
		
		Date Label US:
		<input type="text" name="nameFR" value="">
		
		Date US:
		<input type="text" name="nameFR" value="">
		<input type="text" name="nameFR" value="">
		<input type="text" name="nameFR" value="">
	
	</fieldset>
	<fieldset>
    <legend>Portail et Tag:</legend>
		<select name="Portail">
				<?php 
				include ("connexion.php");
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
		<select name="Tag">
				<?php 
				include ("connexion.php");
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