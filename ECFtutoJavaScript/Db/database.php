<?php

try {
    $bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');
} catch (Exception $e) {
    die('Une erreur a été trouvée : ' . $e->getMessage());
}