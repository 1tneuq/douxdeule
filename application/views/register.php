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

            <?php echo form_open('utilisateur/register') ?>
                <h2 class="text-center">Inscription</h2>
				<?php echo validation_errors(); ?>
				
                <div class="form-group">
                    <input type="name" name="prenom" class="form-control" placeholder="Prenom" required="required" autocomplete="off" value=<?php echo set_value('prenom',''); ?>>
                </div>
                <div class="form-group">
                    <input type="name" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off" value=<?php echo set_value('nom',''); ?>>
                </div>
                <div class="form-group">
                    <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required="required" autocomplete="off" value=<?php echo set_value('pseudo',''); ?>>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off" value=<?php echo set_value('email',''); ?>>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off" value=<?php echo set_value('password','');?>>
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>
                </div>
            </form>
			<p class="text-center"><a href=<?php echo base_url("utilisateur/login") ?>>Se connecter</a></p>
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
