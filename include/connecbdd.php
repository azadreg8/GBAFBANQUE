<?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=GBAFBANQUE;charset=utf8;port=3306' , 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch (Exception $e)
    {
          die('Erreur : ' . $e->getMessage());
    } 
