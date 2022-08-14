<?php 
session_start();
$title = 'Connexion';
require("include/connecbdd.php");
require_once("include/header_public.php");
if (isset($_SESSION['id_user'])) 
header("Location: index_user.php");
?>
		<div id="bloc_page">
			<div id="login">
				<h2>Se connecter</h2>
				<!-- Formulaire de connexion -->
				<div class="form">
					<form method="post" action="verif_connexion.php">
						<label for="votrepseudo"> Pseudo </label> <br>
						<input class="input" type="text" name="username" id="votrepseudo"> <br>
						<label for="votremdp"> Mot de passe </label> <br>
						<input class="input" type="password" name="password" id="votremdp"> <br>
						<a href="mdp_oublie.php"> Mot de passe oublié ? </a><br>
						<input class="bouton_connexion" type="submit" value="Connexion"> <br>
					</form>
				</div>
	
				<?php 
				// erreur si mdp faux
				if(!empty($_GET['err']) && $_GET['err']== "password")
				{
					echo '<p style="color: rgb(252, 116, 106);"><strong> Mot de passe ou pseudo incorrect ! </strong></p>'; 
				}

				//  validation si mdp modifié 
				if(!empty($_GET['ok']) && $_GET['ok']== "password")
				{
					echo '<p style="color: rgb(rgb(0, 128, 0);"><strong> Votre mot de passe a bien été modifié ! </strong> </p>'; 
				}

				//  erreur si tous les champs ne sont pas remplis
				if(!empty($_GET['err']) && $_GET['err']== "champs")
				{
					echo '<p style="color: rgb(255, 0, 0);"><strong>Veuillez remplir tous les champs.</strong></p>';  
				}	
				?>

				<div class ="nouveaumembre">
					<p> Nouveau membre ?<br>
						<button class="bouton_connexion"><a href="page_inscription.php">je m'inscris</a></button>
					</p>
				</div>
			</div>
		</div>
<?php 
require_once('include/footer.php');
