<?php
  	$conn =mysql_connect("localhost","root","") or die(mysql_err());
  	mysql_select_db("gestion_etudiant",$conn) or die(mysql_error());
  	$im_etu=$_POST['numero'];
  	$nom_etu=$_POST['nom'];
	$prenom_etu=$_POST['prenom'];
	$sexe_etu=$_POST['sexe'];
	$date_naiss_etu=$_POST['dateNaiss'];
	$adresse_etu=$_POST['adresse'];
	$tel_etu=$_POST['tel'];

	$req="insert into etudiant (im_etu,nom_etu,prenom_etu,sexe_etu,date_naiss_etu,adresse_etu,tel_etu) values ('$im_etu','$nom_etu','$prenom_etu','$sexe_etu','$date_naiss_etu','$adresse_etu','$tel_etu')";
	mysql_query($req) or(die(mysql_error()));
?>