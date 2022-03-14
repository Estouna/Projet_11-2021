<?php

session_start();

require('Db/database.php');

// Vérifie que l'id de session existe, que l'utilisateur est connecté.
if (isset($_SESSION['id'])) {
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();

    // Vérifie le pseudo, s'il n'est pas vide et si newpseudo est différent de pseudo

    if (isset($_POST['newpseudo']) and !empty($_POST['newpseudo']) and $_POST['newpseudo'] != $user['pseudo']) {
        
        //sécurise la variable avec htmlspecialchars (injection de code)
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        // Vérifie le nombre de caractères
        $newPseudolength = strlen($newpseudo);
        if ($newPseudolength <= 30) {
            // Vérifie que le pseudo n'existe pas déjà dans la base de données
            $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM membres WHERE pseudo = ?');
            $checkIfUserAlreadyExists->execute(array($newpseudo));
            if ($checkIfUserAlreadyExists->rowCount() == 0) {

                //requête pour update membres pseudo (WHERE id est très important sinon cela mettrait à jour tous les pseudos de la table membres)
                $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
                //envoi des nouveaux paramètres
                $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
                //Redirige l'utilisateur vers la page profil en utilisant son id de session
                header('Location: profil.php');
                exit();

            } else {
                $msg = "Ce pseudo existe déjà.";
            }
        } else {
            $msg = "Votre pseudo ne doit pas dépasser 30 caractères.";
        }
    }

    // Vérifie si le nouveau mail existe, s'il n'est pas vide et s'il est différent de l'ancien
    if (isset($_POST['newmail']) and !empty($_POST['newmail']) and $_POST['newmail'] != $user['mail']) {
        //sécurise la variable avec htmlspecialchars (injection de code)
        $newmail = htmlspecialchars($_POST['newmail']);
        //Fonction qui vérifie que l'adresse mail est valide (quelqu'un qui s'y connait en HTML peut modifier le type email en type texte en inspectant le code)
        if (filter_var($newmail, FILTER_VALIDATE_EMAIL)) {

            // Vérifie que le mail n'existe pas déjà dans la base de données
            $reqNewmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
            $reqNewmail->execute(array($newmail));
            $newmailExist = $reqNewmail->rowCount();
            // Si mail == 0 dans la base de données
            if ($newmailExist === 0) {

                //requête pour update membres mail (WHERE id est très important sinon cela mettrait à jour tous les mails de la table membres)
                $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
                //envoi des nouveaux paramètres
                $insertmail->execute(array($newmail, $_SESSION['id']));
                //Redirige l'utilisateur vers la page profil en utilisant son id de session

                header('Location: profil.php');
                exit();
                
            } else {
                $msg = "Adresse mail déjà utilisée.";
            }
        } else {
            $msg = "Votre adresse mail n'est pas valide.";
        }
    }

    // Vérifie le nouveau mdp existe, s'il n'est pas vide et s'il est différent de l'ancien
    if (isset($_POST['newmdp1']) and !empty($_POST['newmdp1']) and isset($_POST['newmdp2']) and !empty($_POST['newmdp2'])) {
        $mdp1 = $_POST['newmdp1'];
        $mdp2 = $_POST['newmdp2'];

        if ($mdp1 == $mdp2) {

            $mdp1 = password_hash($_POST['newmdp1'], PASSWORD_DEFAULT);
            $insertmdp = $bdd->prepare("UPDATE membres SET pass = ? WHERE id = ?");
            //requête sql pour update membres mot de passe (WHERE id est très important sinon cela mettrait à jour tous les mdp de la table membres)
            $insertmdp->execute(array($mdp1, $_SESSION['id']));
            //mdp1 ou mdp2 ça revient au même
            header('Location: profil.php');
            exit();
        } else {
            $msg = "Vos deux mots de passe ne correspondent pas";
        }
    }

    if (isset($_POST['newpseudo']) and $_POST['newpseudo'] == $user['pseudo'] and $_POST['newmail'] == $user['mail'] and isset($_POST['newmdp1']) and empty($_POST['newmdp1']) and isset($_POST['newmdp2']) and empty($_POST['newmdp2'])) {
         $msg = "Vous devez modifier un champ avant de cliquer";
    }

?>

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/edition-profil.css">
        <link rel="stylesheet" href="./css/tutoJava-all.css">
        <title>Profil</title>
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
                        <a class="span-a1" href="profil.php"><?= $_SESSION['pseudo'] ?></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <main class="mainEdition">

            <form action="" method="POST" class="row centerH centerV">

                <div class="container column centerH centerV">
                    <div class="bloc-form column centerH">

                        <div class="row centerH">
                            <legend>Edition de mon profil</legend>
                        </div>

                        <div class="column centerH centerV">
                            <div class="column">
                                <label for="newpseudo">Changer votre pseudo :</label>
                                <input type="text" name="newpseudo" id="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />
                            </div>

                            <div class="column">
                                <label for="newmail">Changer votre adresse email :</label>
                                <input type="email" name="newmail" id="newmail" placeholder="Email" value="<?php echo $user['mail']; ?>" />
                            </div>


                            <div class="column">
                                <label for="newmdp1">Changer votre mot de passe :</label>
                                <input type="password" name="newmdp1" id="newmdp1" placeholder="Mot de passe" />
                            </div>


                            <div class="column">
                                <label for="newmdp2">Confirmation du mot de passe :</label>
                                <input type="password" name="newmdp2" id="newmdp2" placeholder="Confirmation du mot de passe" />
                            </div>
                        </div>

                        <div class="column centerH centerV">
                            <input id="formMaj" name="formMaj" type="submit" value="Mettre à jour mon profil" />
                            <a class="a-editProfil-retour" href="profil.php">Retour</a>
                        </div>

                        <?php
                        if (isset($msg)) {
                            echo '<div class="block-mess row centerH centerV"><span class="red">' . $msg . "</span></div>";
                        }
                        ?>
                    </div>
                </div>

            </form>

        </main>
    </body>
<?php
} else {
    header("Location: connexion.php");
    //redirige la personne si elle n'est pas connbectée vers la page connexion
}
?>

    </html>