<!DOCTYPE html>
<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if (isset($_SESSION['id']))
//test pour voir si la personne est connectée
{
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?'); //requête sur l'utilisateur pour son id
    $requser->execute(array($_SESSION['id'])); //execute avec $_SESSION['id']
    $user = $requser->fetch(); //affichage des données en allant les chercher

    if (isset($_POST['newpseudo']) and !empty($_POST['newpseudo']) and $_POST['newpseudo'] != $user['pseudo'])
    //vérifie le pseudo, s'il n'est pas vide et si newpseudo est différent de pseudo
    {
        $newpseudo = htmlspecialchars($_POST['newpseudo']);
        //sécurise la variable avec htmlspecialchars (injection de code)
        $insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
        //requête sql pour update membres pseudo (WHERE id est très important sinon cela mettrait à jour tous les pseudos de la table membres)
        $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
        //envoi des nouveaux paramètres
        header('Location: profil.php?id=' . $_SESSION['id']);
    }

    if (isset($_POST['newmail']) and !empty($_POST['newmail']) and $_POST['newmail'] != $user['mail'] and filter_var($newmail, FILTER_VALIDATE_EMAIL))
    //vérifie le mail, s'il n'est pas vide et si newmail est différent de mail
    {
        $newmail = htmlspecialchars($_POST['newmail']);
        //sécurise la variable avec htmlspecialchars (injection de code)
        $insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
        //requête sql pour update membres mail (WHERE id est très important sinon cela mettrait à jour tous les mails de la table membres)
        $insertmail->execute(array($newmail, $_SESSION['id']));
        //envoi des nouveaux paramètres
        header('Location: profil.php?id=' . $_SESSION['id']);
    }

    if (isset($_POST['newmdp1']) and !empty($_POST['newmdp1']) and isset($_POST['newmdp2']) and !empty($_POST['newmdp2']))
    //vérifie le mdp1, s'il n'est pas vide et si newmdp1 est différent de mdp1
    {
        $mdp1 = sha1($_POST['newmdp1']);
        $mdp2 = sha1($_POST['newmdp2']);

        if ($mdp1 == $mdp2) {
            $insertmdp = $bdd->prepare("UPDATE membres SET motDePasse = ? WHERE id = ?");
            //requête sql pour update membres mot de passe (WHERE id est très important sinon cela mettrait à jour tous les mdp de la table membres)
            $insertmdp->execute(array($mdp1, $_SESSION['id']));
            //mdp1 ou mdp2 ça revient au même
            header('Location: profil.php?id=' . $_SESSION['id']);
        } else {
            $msg = "Vos deux mots de passe ne correspondent pas";
        }
    }

    if (isset($_POST['newpseudo']) and $_POST['newpseudo'] == $user['pseudo'] and isset($_POST['newmdp1']) and empty($_POST['newmdp1']) and isset($_POST['newmdp2']) and empty($_POST['newmdp2'])) {
        header('Location: profil.php?id=' . $_SESSION['id']);
    }
    /* 
    - Ajouter un filter_var du mail pour vérifier si le mail est valide (modèle page inscription)
    - Faire une requête pour voir si le newmail est bien une adresse valide et s'il n'existe pas dans la bdd pour ne pas avoir de doublons 
      (modèle page inscription $reqmail prepare execute et $mailexist)
    - Peut être créer la même chose pour le pseudo
    - Pour le pseudo mettre la limite de caractère 255 
    */
?>
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
                            <a href="deconnexion.php"><span class="span-a1">D</span><span class="span-a1">E</span><span class="span-a1">C</span><span class="span-a1">O</span><span class="span-a1">N</span><span class="span-a1">N</span><span class="span-a1">E</span><span class="span-a1">X</span><span class="span-a1">I</span><span class="span-a1">O</span><span class="span-a1">N</span></a>
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
                                <label for="newpseudo">Nom d'utilisateur :</label>
                                <input type="text" name="newpseudo" id="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" />
                            </div>

                            <div class="column">
                                <label for="newmail">Email :</label>
                                <input type="email" name="newmail" id="newmail" placeholder="Email" value="<?php echo $user['mail']; ?>" />
                            </div>


                            <div class="column">
                                <label for="newmdp1">Mot de passe :</label>
                                <input type="password" name="newmdp1" id="newmdp1" placeholder="Mot de passe" />
                            </div>


                            <div class="column">
                                <label for="newmdp2">Confirmation du mot de passe :</label>
                                <input type="password" name="newmdp2" id="newmdp2" placeholder="Confirmation du mot de passe" />
                            </div>
                        </div>

                        <div class="row centerH">
                            <input id="formMaj" name="formMaj" type="submit" value="Mettre à jour mon profil" />
                        </div>

                    </div>
                </div>
            </form>
            <?php
            if (isset($msg)) {
                echo '<div class="block-mess row centerH centerV"><span class="red">' . $msg . "</span></div>";
            }
            ?>
        </main>
    </body>

    </html>
<?php
} else {
    header("Location: connexion.php");
    //redirige la personne si elle n'est pas connbectée vers la page connexion
}
?>