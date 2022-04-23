+9 <?php
	if(isset($_POST["nom_etu"]))
	{
		$nom_etu=$_POST['nom'];
		$prenom_etu=$_POST['prenom'];
		$sexe_etu=$_POST['sexe'];
		$date_naiss_etu=$_POST['dateNaiss'];
		$adresse_etu=$_POST['adresse'];
		$tel_etu=$_POST['tel'];
		if($_POST["nom_etu"]!=""){
			include ("ajoutCycle.php");
			$query="insert into etudiant VALUES ('$nom_etu','$prenom_etu','$sexe_etu','$date_naiss_etu','$adresse_etu','$tel_etu')";
			$conn->exec($query);
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Etudiant</title>
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
		<h1 class="let">formulaire etudiant</h1>
		<form method="POST" action="#">
			<fieldset id="section1">
				<legend>Ajout d' un(e) etudiant(e) :</legend><br>
				<label for="nom">Nom :</label>
				<input type="text" id="text" name="nom" required="required"><br>

				<label for="prenom">Prénom :</label>
				<input type="text" id="text" name="prenom" autocomplete="prenom" required="required"><br>

				<label for="text">Sexe :</label>
				<input type="text" id="text" name="sexe" required="required"><br>

				<label for="naissance">Date de naissance :</label>
				<input type="date" id="date" name="dateNaiss" required="required"><br>

				<label for="text">Adresse :</label>
				<input type="text" id="text" name="adresse" required="required"><br>

				<label for="tel">N° telephone :</label>
				<input type="tel" id="tel" name="tel" required="required" ><br><br>

				<input type="submit" class="btn btn-primary" value="Ajouter"/>
			</fieldset> 
		</form>
	</div>
		<footer>
			db etablissement &copy; 2019
		</footer>
	</body>
</html>