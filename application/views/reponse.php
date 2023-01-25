

		<div class="conteneur">
		<?php if($sondage == null){ ?>
			<h1>Ce sondage n'existe pas</h1>
		<?php }else{ ?>

			<h1>Répondez au sondage de <?php echo $sondage["pseudo"]; ?> </h1>
			<p><h3>Titre: <?php echo $sondage["titre"]; ?></h3></p>
			<p><h3>Lieu:  <?php echo $sondage["lieu"]; ?></h3></p>
			<p><h3>Note:  <?php echo $sondage["note"]; ?></h3></p>
			<p><h3>Date: de <?php echo $sondage["date1"]; ?>    à    <?php echo $sondage["date2"]; ?></h3></p>
			<?php echo form_open('welcome/reponse/'.$key); ?>
			<?php echo validation_errors(); ?>
				<div class="formrow requiredRow">
					<div class="form-group">
						<label for="Entrezunedate" id="Entrezunedate-ariaLabel">Proposez une nouvelle date de début:</label>
						<input class="form-control" name="date1" type="datetime-local" aria-labelledby="Entrezunedate-ariaLabel" class="required">
					</div>
					<div class="form-group">
						<label for="Entrezunesecondedatesilyenaune" id="Entrezunesecondedatesilyenaune-ariaLabel">Proposez une nouvelle date de fin:</label>
						<input class="form-control" name="date2" type="datetime-local" aria-labelledby="Entrezunesecondedatesilyenaune-ariaLabel">
					</div>
					<input id="chk_Yparticiper?" name="participe" type="checkbox" aria-labelledby="Yparticiper?-ariaLabel" class="required" title="Ce champs est requis">
					<input class="cache" type="hidden" value="juste pour que ça marche" name="error"/>
					<span><label for="chk_Yparticiper?" id="Yparticiper?-ariaLabel">Y participer ?</label></span>
				</div>
				<div class="row">
					<button type="submit" class="btn btn-primary btn-block">Valider</button>
				</div>
			</form>
		<?php } ?>
		</div class="conteneur">

		<style>
			.conteneur{
				text-align: center;
			}
			.btn {
				min-width: 100px;
				margin-top:8px;
				font-size: 15px;
				font-weight: bold;
			}
			.btn-primary{
				color:white;
				background-color: #000000;
				border-color: #000000;
			}
			.btn-primary:hover{
				color:white;
				background-color: #d3d3d3;
				border-color: #d3d3d3;
			}
			footer{
				margin-top: 5%;
			}
		</style>
