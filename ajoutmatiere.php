<?php
  	$conn =mysql_connect("localhost","root","") or die(mysql_err());
  	mysql_select_db("gestion_etudiant",$conn) or die(mysql_error());
  	$nom_matiere=$_POST['nom'];
	$coeff_matiere=$_POST['coefficiant'];

	$req="insert into matiere (nom_matiere,coeff_matiere) values ('$nom_matiere',$coeff_matiere)";
	mysql_query($req) or(die(mysql_error()));

?>