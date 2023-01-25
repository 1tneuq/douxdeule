

<?php echo form_open('welcome/participe'); ?>
<?php echo validation_errors(); ?>
<div class="formcentre">
<div class="forme">
<h2>Participer a un sondage existant </h2>
	<div class="form-group">
		<input class="form-control" placeholder="Clé du sondage" name="clef" type="text" class="required" title="Saisissez la clé. Ce champs est obligatoire.">
	</div>
	<div class="row">
		<button type="submit" class="btn btn-primary btn-block">Valider</button>
	</div>

</div class="forme">
</div class="formcentre">

	<style>
		.formcentre {
			text-align: center;
			width: 800px;
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
			min-height: 40px;
		}

		.form-control{
			min-width: 600px;
		}

		.form-group{
			margin: 5px;
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
			margin-top:8%;
		}
	</style>
