<?php
  	$conn =mysql_connect("localhost","root","") or die(mysql_err());
  	mysql_select_db("gestion_etudiant",$conn) or die(mysql_error());
  	$code_ment=$_POST['code_ment'];
  	$lib_ment=$_POST['lib_ment'];
	$req="insert into mention (code_ment,lib_ment) values ($code_ment,'$lib_ment')";
	mysql_query($req) or(die(mysql_error()));

?>