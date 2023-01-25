


<?php echo form_open('welcome/sondage'); ?>
<?php echo validation_errors(); ?>
<div class="formcentre">
<div class="forme">
<h2>Créez votre sondage: </h2>
	<div class="form-group">
		<input class="form-control" name="titre" type="text" placeholder="Titre" class="required" title="Saisissez le titre. Ce champ est requis.">
	</div>
	<div class="form-group">
		<input class="form-control" name="lieu" type="text" placeholder="Lieu" class="required" title="Ajouter un lieu. Ce champ est requis.">
	</div>
	<div class="form-group">
		<input class="form-control" name="note" type="text" placeholder="Note">
	</div>
	<div class="form-group">
		<label for="Entrezunedate" id="Entrezunedate-ariaLabel">Date de début:</label>
		<input class="form-control" name="date1" type="datetime-local" aria-labelledby="Entrezunedate-ariaLabel" class="required">
	</div>
	<div class="form-group">
		<label for="Entrezunesecondedatesilyenaune" id="Entrezunesecondedatesilyenaune-ariaLabel">Date de fin:</label>
		<input class="form-control" name="date2" type="datetime-local" aria-labelledby="Entrezunesecondedatesilyenaune-ariaLabel">
	</div>
	<div class="row">
		<button type="submit" class="btn btn-primary btn-block">Terminer</button>
	</div>
</div class="forme">
</div class="formcentre">

<style>
	.formcentre {
		text-align: center;
		width: 340px;
		margin: 50px auto;
	}
	.formcentre .forme {
		margin-bottom: 15px;
		background: #f7f7f7;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		padding: 30px;
	}
	.formcentre h2 {
		margin: 0 0 15px;
	}
	.form-control, .btn {
		min-height: 38px;
	}
	.form-group{
		margin: 5px;
	}
	.btn {
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
		margin-top:2%;
	}

</style>
