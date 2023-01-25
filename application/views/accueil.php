
		<header>
			<h1>Doux Deule,</h1>
			<h4>LE MEILLEUR SITE POUR VOS MEETINGS</h4>
			<form action="<?php echo base_url("welcome/sondage"); ?>">
				<button type="submit">Commencer</button>
			</form>
		</header>
		<section class="main">

			<div class="content">
				<div class="card">
					<div class="left">
						<h1>Qui sommes-nous ?</h1>
						<p>Nous sommes une jeune startup qui souhaite simplifier les rapports humains, et ça commence par ce site ! </p>
					</div>
					<div class="right">
						<img src=<?php echo base_url("assets/images/four-friends.jpg") ?> alt="quatre bg">
					</div>
				</div>

				<div class="card">
					<div class="left">
						<h1>Comment faire ?</h1>
						<p>Tout d'abord, vérifiez si vos informations personnelles sont éxactes. Puis, rendez-vous sur l'onglet "Programmer une rencontre" ou "commencer". Une fois dans l'onglet suivant, il ne vous reste plus qu'à selectionner le meeting qui vous correspond le plus !</p>
					</div>
					<div class="right">
						<img src=<?php echo base_url("assets/images/content.jpg") ?> alt="">
					</div>
				</div>
			</div>
		</section>
		<style>
			footer{
				margin-top:0px;
			}
		</style>
