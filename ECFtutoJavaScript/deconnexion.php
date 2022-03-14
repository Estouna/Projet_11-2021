<?php
session_start();
$_SESSION = array(); //vide les variables de session
session_destroy(); //détruit la session
header("Location: connexion.php"); //renvoi l'utilisateur à la page connexion
