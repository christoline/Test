<?php
	$lib_cycle="";
  	if(isset($_POST["lib_cycle"]))
  	{
  		$lib_cycle = $_POST["lib_cycle"];
  			{
  				include("ajoutCycle.php");
  				$query = "insert into cycle values(NULL,'$lib_cycle')";
  				$conn->exec($query);
  				echo "Ajout avec sc";
  			}		
  	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ajout cycle</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body>
<div class="wrapper">
		<header>
			<h2>Etablissement</h2>
		</header>
		<div class="navigationDesktop">
			<nav>
				<ul>
					<li><a href="#">Etudiant</a>
						<ul>
							<li><a href="saisieEtudiant.html">Ajouter</a></li>
							<li><a href="#">Rechercher</a></li>
							<li><a href="#">Liste</a></li>
						</ul>
					</li>
					<li><a href="#">Classe</a>
						<ul>
							<li><a href="saisieClasse.html">Ajouter</a></li>
							<li><a href="#">Rechercher</a></li>
							<li><a href="#">Liste</a></li>
						</ul>
					</li>
					<li><a href="#">Enseigner</a>
						<ul>
							<li><a href="#">Ajouter</a></li>
							<li><a href="#">Rechercher</a></li>
							<li><a href="#">Liste</a></li>
						</ul>
					</li>
					<li><a href="#">Matière</a>
						<ul>
							<li><a href="saisiematiere.html">Ajouter</a></li>
							<li><a href="#">Rechercher</a></li>
							<li><a href="#">Liste</a></li>
						</ul>
					</li>
					<li><a href="#">Mention</a>
						<ul>
							<li><a href="saisieMention.html">Ajouter</a></li>
							<li><a href="#">Rechercher</a></li>
							<li><a href="#">Liste</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<h1 class="let">formulaire cycle</h1>
		<form method="post" action="ajoutCycle.php">
			<fieldset id="section1">
				<legend>Ajout d' un cycle :</legend><br>
				<label for="libelle">Libelle :</label>
				<input type="text" name="lib_cycle" required="required" class="form-control" value="<?php echo $lib_cycle ?>"/><br>
				<input type="submit" class="btn btn-primary" value="Ajouter"/>
			</fieldset>
		</form>
	</div>

		<footer>
			db etablissement &copy; 2019
		</footer>
</body>
</html>