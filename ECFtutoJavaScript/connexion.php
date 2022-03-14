<?php 

session_start();

require('Db/database.php');

if (isset($_POST['validate'])) {
    $mailConnect = htmlspecialchars($_POST['mailConnect']);
    $passwordConnect = ($_POST['passwordConnect']);
    if (!empty($mailConnect) and !empty($passwordConnect)) 
    {
        $checkIfUserExists = $bdd->prepare("SELECT * FROM membres WHERE mail = ?"); //requête sur l'utilisateur pour vérifier qu'il existe bien
        $checkIfUserExists->execute(array($mailConnect)); //execute la requête avec des tableaux
        $userexist = $checkIfUserExists->rowCount(); // "rowCount" = fonction qui permet de compter le nombre de colonnes (row = ligne/rangée count = compter)
        if ($userexist == 1) //si l'utilisateur existe
        {
            // Récupère les données de l'utilisateur
            $usersInfos = $checkIfUserExists->fetch();
            
            // Vérifie si le mot de passe est correct
            if (password_verify($passwordConnect, $usersInfos['pass'])) {

                // Authentifie l'utilisateur sur le site et récupère ses données dans des variables globales session
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['pseudo'] = $usersInfos['pseudo'];
                $_SESSION['mail'] = $usersInfos['mail'];

                //Redirige vers le profil de la personne
                header("Location: profil.php");
                exit();

            } else {
                $erreur = "Votre mot de passe est incorrect";
            }
        } else {
            $erreur = "Adresse mail ou mot de passe incorrect";
        }
    } else {
        $erreur = "Veuillez compléter tous les champs";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/connexion.css">
    <link rel="stylesheet" href="./css/tutoJava-all.css">
    <title>Connexion</title>
</head>

<body>
    <header class="header row centerH centerV">
        <div id="titre_principal">
            <h1 id="retourmenu"><span class='titrechev'>/*</span> JavaScript <span class='titrechev'>*/</span></h1>
            <nav id="nav-header">
                <span class='titreJs'>JS</span>
                <ul class="ul-header row centerV">
                    <li>
                        <a href="tuto-javascript3.php">
                            <span class="span-a1">A</span><span class="span-a1">C</span><span class="span-a1">C</span><span class="span-a1">U</span><span class="span-a1">E</span><span class="span-a1">I</span><span class="span-a1">L</span></a>
                    </li>
                    <li>
                        <a href="reference.php"><span class="span-a1">G</span><span class="span-a1">L</span><span class="span-a1">O</span><span class="span-a1">S</span><span class="span-a1">S</span><span class="span-a1">A</span><span class="span-a1">I</span><span class="span-a1">R</span><span class="span-a1">E</span></a>
                    </li>
                    <li>
                        <a href="connexion.php"><span class="span-a1">C</span><span class="span-a1">O</span><span class="span-a1">N</span><span class="span-a1">N</span><span class="span-a1">E</span><span class="span-a1">X</span><span class="span-a1">I</span><span class="span-a1">O</span><span class="span-a1">N</span></a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    
    <main class="mainConnexion column centerH centerV">

        <form action="" method="POST" class="formConnexion row centerH centerV">

            <div class="container column centerH centerV">
                <div class="bloc-form column centerH">
                    <div class="row centerH">
                        <legend>Connexion</legend>
                    </div>
                    <div class="column centerH centerV">
                        <h2>Entrez vos identifiants</h2>
                        <div class="column">
                            <label for="mailConnect">Email :</label>
                            <input type="email" name="mailConnect" placeholder="Email">
                        </div>
                        <div class="column">
                            <label for="passwordConnect">Mot de passe :</label>
                            <input type="password" name="passwordConnect" placeholder="Mot de passe">
                        </div>
                        <div class="row centerH">
                            <input id="seConnecter" type="submit" name="validate" value="Se connecter">
                        </div>
                        <p class="p-pasEncore">Pas encore de compte <a class="sInscrire" href="inscription.php">s'inscrire</a></p>
                    </div>
                </div>
            </div>

        </form>

        <?php
        if (isset($erreur)) {
            echo '<div class="block-mess"><span class="red">' . $erreur . "</span></div>";
        }
        if (isset($valide)) {
            echo '<span class="green">' . $valide . "</span>";
        }

        ?>
    </main>

</body>

</html>