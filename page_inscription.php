<?php
session_start();
$title = 'Inscription';
require("include/connecbdd.php");
require_once("include/header_public.php");
if (isset($_SESSION['id_user'])) 
header("Location: index_user.php");
?>

		<div id="bloc_page">
			<div id="inscription">
				<h2>Inscription</h2> 
				<?php //affiche une erreur si pseudo déjà utlisé 
				if(!empty($_GET['err']) && $_GET['err']== "pseudo")
				{
					echo '<p style="color: rgb(252, 116, 106);"><strong> Pseudo déjà utilisé ! </strong></p>'; 
				}
				// affiche une validation si tous les champs ne sont pas remplis 
				if(!empty($_GET['err']) && $_GET['err']== "champs")
				{
					echo '<p style="color: rgb(252, 116, 106);"><strong> Veuillez remplir tous les champs. </strong></p>';  
				}
				?>
				<!-- Formulaire d'inscription -->
				<form class="form" method="post" action="inscription_bdd.php">
					Votre nom :
					<input class="input" type="text" name="nom">
					Votre prénom :
					<input class="input" type="text" name="prenom">
					Votre pseudo :
					<input class="input" type="text" name="username">
					Votre mot de passe :
					<input class="input" type="password" name="password">
					Votre question secrète : <br>
					<select class="input" name="choix">
						<option value="choix1">Le nom de jeune fille de votre mère</option>
						<option value="choix2">Le nom de votre premier animal de compagnie</option>
						<option value="choix3">La ville de naissance de votre père</option>
					</select> <br>
					Réponse à la question secrète :
					<input class="input" type="text" name="reponse">
					<input class="bouton_connexion" type="submit" name="valider" value="Valider">
				</form>
			</div>
		</div>
<?php 
require_once('include/footer.php');