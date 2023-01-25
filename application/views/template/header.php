<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Doux Deule</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href=<?php echo base_url("assets/css/style.css"); ?>>
	</head>
	<body>
		<nav>
			<h1>Doux Deule</h1>
			<div class="onglets">
				<a href="<?php echo base_url("welcome"); ?>">Accueil</a>
				<a href="<?php echo base_url("welcome/sondage"); ?>">Nouveau sondage</a>
				<a href="<?php echo base_url("welcome/participe"); ?>">Participer à un sondage</a>
				<a href="<?php echo base_url("welcome/liste"); ?>">Mes sondages</a>
				<a href=<?php echo base_url("welcome/landing"); ?>>Mes informations</a>
			</div>
			<p class="connecte"> Connecté(e) en tant que <?php echo $utilisateur['pseudo'] ?></p>
		</nav>
