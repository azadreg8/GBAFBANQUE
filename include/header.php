<?php
require("include/connecbdd.php");

if(empty($_SESSION['id_user']) AND empty($_SESSION['pseudo']) AND empty($_SESSION['nom']) AND empty($_SESSION['prenom'])) 
{
   // header('location: page_connexion.php');
}
else 
{
?>

<html>
<!-- Header connecté -->
        <head>
             <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php 
            if(!empty($title))
            {
        ?>
            <title><?= $title; }?></title>
          <?php          
            }
            ?>
             <link rel="stylesheet" type="text/css" href="css/style.css">       
        </head>   
    <body>
        <header>
       
        <a href="index_user.php">
            <div class="logo">
                <img class="logo" src="img/logogbaf.png" alt="logo"/>
                </div>
            </a>
            <div id="nomsession"><!-- affiche nom prénom sess --> 
                <button class="bouton_nom">
                    <?php
                        echo '<img class="logo" src="img/iconlog.png" alt="logo"/> ' . $_SESSION['nom'] .' '. $_SESSION['prenom'] ;
                    ?>
                    
                </button>    
                <button class="bouton_parametre"><a href='parametres.php'> Paramètres du compte</a>
                </button> 
                
                <button class="bouton_deconnexion"><a href='page_deconnexion.php'> Déconnexion</a>
                </button> 
                    <?php
                   
                    ?>
            </div>
        </header>
    