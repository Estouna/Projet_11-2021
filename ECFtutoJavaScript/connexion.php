<!DOCTYPE html>
<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if (isset($_POST['formConnexion'])) {
    $mailConnect = htmlspecialchars($_POST['mailConnect']);
    $mdpConnect = sha1($_POST['mdpConnect']);
    if (!empty($mailConnect) and !empty($mdpConnect)) //Mettre d'autres options
    {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motDePasse = ?"); //requête sur l'utilisateur pour vérifier qu'il existe bien
        $requser->execute(array($mailConnect, $mdpConnect)); //execute la requête avec des tableaux
        $userexist = $requser->rowCount(); // "rowCount" = fonction qui permet de compter le nombre de colonnes (row = ligne/rangée count = compter)
        if ($userexist == 1) //si l'utilisateur existe
        {
            $userinfo = $requser->fetch(); // Recevoir les infos
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['pseudo'] = $userinfo['pseudo'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location: profil.php?id=" . $_SESSION['id']); //Pour rediriger vers le profil de la personne
        } else {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
?>
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
        <!--<div class="blockForm column centerH centerV">
            <h2>Connexion</h2>
            <h3>Entrez vos identifiants</h3>
            <br /><br />
            <form class="formConnexion column centerH" method="POST" action="">
                <input class="btn" type="email" name="mailConnect" placeholder="Email">
                <input class="btn" type="password" name="mdpConnect" placeholder="Mot de passe">
                <input class="btn" type="submit" name="formConnexion" value="Se connecter !">
            </form>
            <p>Pas encore de compte <a href="inscription.php">s'inscrire</a></p>
        </div>-->

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
                            <label for="mdpConnect">Mot de passe :</label>
                            <input type="password" name="mdpConnect" placeholder="Mot de passe">
                        </div>
                        <div class="row centerH">
                            <input id="seConnecter" type="submit" name="formConnexion" value="Se connecter">
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