<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

            <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <title>Connexion</title>
        </head>


        <body>

			<div class="login-form">
				<?php echo form_open('utilisateur/login') ?>
					<h2 class="text-center">Connexion</h2>
					<?php echo validation_errors(); ?>
					<?php echo (isset($error))? $error:''; ?>
					<div class="form-group">
						<input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off" value=<?php echo set_value('email','');?> >
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Connexion</button>
					</div>
				</form>
				<p class="text-center"><a href=<?php echo base_url("utilisateur/register") ?>>Inscription</a></p>
			</div>

			<style>
				a{
				  color:#808080;
				  text-decoration: none;
				}
				a:hover{
				  text-decoration: none;
				  color:#000000;
				}
				.login-form {
					width: 340px;
					margin: 50px auto;
				}
				.login-form form {
					margin-bottom: 15px;
					background: #f7f7f7;
					box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
					padding: 30px;
				}
				.login-form h2 {
					margin: 0 0 15px;
				}
				.form-control, .btn {
					min-height: 38px;
					border-radius: 2px;
				}
				.btn {
					font-size: 15px;
					font-weight: bold;
				}
				.btn-primary{
				  background-color: #000000;
				  border-color: #000000;
				}
				.btn-primary:hover{
				  background-color: #808080;
				  border-color: #808080;
				}
			</style>
        </body>
</html>
