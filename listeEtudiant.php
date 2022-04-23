<!DOCTYPE html>
<html>
<head>
	<title>etablissement</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
	<meta charset="utf-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="../../ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../../maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	 
</head>
<body>
	<div>
		<h1>Liste des etudiants</h1>
		<table class="table table-bordered table-hover table-stripped" action="">
		<tr><th>Numero</th><th>Nom</th><th>Prènom</th><th>Sexe</th><th>Date de naissance</th><th>adresse</th><th>Telephone</th></tr>
		<?php
			include("ajoutCycle.php");
			$query = "SELECT * FROM etudiant";
			$result = $conn->query($query);
			$data = $result->fetchAll();
			for($i =0;$i<count($data);$i++)
			{
				$im_etu=$data[$i]["im_etu"];
				$nom_etu=$data[$i]["nom_etu"];
				$prenom_etu=$data[$i]["prenom_etu"];
				$sexe_etu=$data[$i]["sexe_etu"];
				$date_naiss_etu=$data[$i]["date_naiss_etu"];
				$adresse_etu=$data[$i]["adresse_etu"];
				$tel_etu=$data[$i]["tel_etu"];
				echo "<tr><td>$im_etu</td><td>$nom_etu</td><td>$prenom_etu</td><td>$sexe_etu</td><td>$date_naiss_etu</td><td>$adresse_etu</td><td>$tel_etu</td></tr>";
			}
		?>	
		</table>
	</div>
</body>
</html>