<?php

session_start();

require('Db/database.php');

if (isset($_POST['validate'])) {
    $user_pseudo = htmlspecialchars($_POST['pseudo']);
    $user_email = htmlspecialchars($_POST['mail']);
    $user_email2 = htmlspecialchars($_POST['mail2']);
    $user_password = ($_POST['password']);
    $user_password2 = ($_POST['password2']);

    if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['password']) and !empty($_POST['password2']))
    //Si les champs sont remplis (!empty)
    {
        $pseudolength = strlen($user_pseudo);
        if ($pseudolength <= 30)
        //Vérifie le nombre de caractères
        {
            $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = ?');
            $checkIfUserAlreadyExists->execute(array($user_pseudo));
            if ($checkIfUserAlreadyExists->rowCount() == 0) {
                if ($user_email == $user_email2)
                //confirmation mail
                {
                    if (filter_var($user_email, FILTER_VALIDATE_EMAIL))
                    //Fonction qui vérifie que l'adresse mail est valide (quelqu'un qui s'y connait en HTML peut modifier le type email en type texte)
                    {
                        $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                        $reqmail->execute(array($user_email));
                        $mailExist = $reqmail->rowCount();
                        if ($mailExist == 0) {
                            //vérifie si l'adresse mail n'existe pas déjà dans la bdd. On peut faire la même chose pour le pseudo

                            if ($user_password == $user_password2)  {

                                $user_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                                $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, pass) VALUES(?, ? ,?)");
                                $insertmbr->execute(array($user_pseudo, $user_email, $user_password));
                                $valide = "Votre compte a bien été créé ! <a class=\"meConnecter\" href=\"connexion.php\"> Me connecter</a>";
                                
                            } else {
                                $erreur = "Vos mots de passes ne correspondent pas.";
                            }

                        } else
                        //Si le mail existe déjà erreur
                        {
                            $erreur = "Adresse mail déjà utilisée.";
                        }
                    } else
                    //adresse mail non valide
                    {
                        $erreur = "Votre adresse mail n'est pas valide.";
                    }
                } else
                //confirmation mail erreur 
                {
                    $erreur = "Vos adresses mail ne correspondent pas.";
                }
            } else {
                //pseudo déjà existant
                $erreur = "Ce pseudo existe déjà.";
            }
        } else
        //nombre de caractères erreur 
        {
            $erreur = "Votre pseudo ne doit pas dépasser 30 caractères.";
        }
    } else
    //Si les champs ne sont pas remplis erreur 
    {
        $erreur = "Tous les champs doivent être complétés.";
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/inscription.css">
    <link rel="stylesheet" href="./css/tutoJava-all.css">
    <title>Formulaire</title>
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

    <main>

        <form method="POST" id="formInscription" class="row centerH centerV">

            <div class="container column centerH centerV">
                <div class="bloc-form column centerH">

                    <div class="row centerH">
                        <legend>Formulaire d'inscription</legend>
                    </div>

                    <div class="column centerH centerV">
                        <div class="column">
                            <label for="pseudo">Nom d'utilisateur :</label>
                            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?php if (isset($user_pseudo)) {
                                                                                                            echo $user_pseudo;
                                                                                                        } ?>" />
                            <span id="errLogin" class="erreur"></span>
                        </div>
                        <div class="column">
                            <label for="mail">Email :</label>
                            <input type="email" name="mail" id="mail" placeholder="laurent@gmail.com" value="<?php if (isset($user_email)) {
                                                                                                                    echo $user_email;
                                                                                                                } ?>" />
                            <span id="errMail" class="erreur"></span>
                        </div>
                        <div class="column">
                            <label for="mail2">Confirmation de l'email :</label>
                            <input type="email" name="mail2" id="mail2" placeholder="laurent@gmail.com" value="<?php if (isset($user_email2)) {
                                                                                                                    echo $user_email2;
                                                                                                                } ?>" />
                            <span id="errMail2" class="erreur"></span>
                        </div>
                        <div class="column">
                            <label for="password">Mot de passe :</label>
                            <input type="password" name="password" id="password" placeholder="Mot de passe" />
                            <span id="errMdp" class="erreur"></span>
                        </div>
                        <div class="column">
                            <label for="password2">Confirmation du mot de passe :</label>
                            <input type="password" name="password2" id="password2" placeholder="Confirmation du mot de passe" />
                            <span id="errMdp2" class="erreur"></span>
                        </div>
                    </div>

                    <div class="row centerH">
                        <input id="envoyer" name="validate" type="submit" value="Envoyer" />
                    </div>
                </div>
            </div>

        </form>
        <div class="message row centerH centerV">
            <?php
            if (isset($erreur)) {
                echo '<span class="red">' . $erreur . "</span>";
            }
            if (isset($valide)) {
                echo '<span class="green">' . $valide . "</span>";
            }
            ?>
        </div>

    </main>
    <script src="form3.js"></script>
</body>

</html>