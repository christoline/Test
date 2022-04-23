<?php
  	$conn =mysql_connect("localhost","root","") or die(mysql_err());
  	mysql_select_db("gestion_etudiant",$conn) or die(mysql_error());
  	$lib_classe=$_POST['libelle'];
  	$code_cycle=$_POST['code'];
  	$sql="insert into classe values('lib_classe','$code_cycle')";
  	mysql_query($sql);
  	mysql_close();
?>