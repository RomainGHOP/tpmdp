<?php $hash= '$2y$10$XPq9T1IdfUCTyZFPD0RxGeN79FdLujGRlQ2zoV6q.T4xmKcPr8NK.';?>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Page Nasa </title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body style=" text-align:center;">
		<h1>Page Nasa</h1>
			<p> Entrez le bon mot de passe pour aller plus loin. </p>
			<form method="post">
				<p>
					<input type="password" name="mdp"/>
					<input type="submit" name="submit" value="Valider"/>
				</p>
			</form>

		<?php 
			if(!isset($_POST['mdp'])) {
		?>
				<div class="alert alert-warning" role="alert">
  					Veuillez rentrez un mot de passe.
				</div>
		<?php
			} else if(isset($_POST['mdp']) AND password_verify($_POST['mdp'], $hash)===false) {
		?>
				<div class="alert alert-warning" role="alert">
  					Mot de passe incorrect !
				</div>
		<?php
			} else {
		?>
				<div class="alert alert-success" role="alert">
  					<h4 class="alert-heading">Bienvenu sur notre site de la nasa</h4>
  						<p>Vous trouverez les codes sur une pages beaucoup plus sécurisé, cette page est un troll.</p>
  						<hr>
  						<p class="mb-0">A plus ! </p>
				</div>
		<?php
			}
		?>
	</body>
</html>