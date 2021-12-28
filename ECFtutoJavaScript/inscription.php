<!DOCTYPE html>

<?php
//https://www.youtube.com/watch?v=s7qtAnH5YkY Tuto inscription
$bdd = new PDO('mysql:host=127.0.0.1;dbname=espace_membre', 'root', '');

if (isset($_POST['formInscription'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    //htmlspecialchars = fonction qui permet d'enlever tous les caractères HTML pour pouvoir éviter des injections de codes.
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    /*
    $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
    $mdp2 = password_hash($_POST['mdp2'], PASSWORD_DEFAULT);
    */
    //https://www.youtube.com/watch?v=wyC5wVeFQNk pour explication hachage mdp

    if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['mdp']) and !empty($_POST['mdp2']))
    //Si les champs sont remplis (!empty)
    {
        $pseudolength = strlen($pseudo);
        if ($pseudolength <= 255)
        //Vérifie le nombre de caractères
        {
            if ($mail == $mail2)
            //confirmation mail
            {
                if (filter_var($mail, FILTER_VALIDATE_EMAIL))
                //Fonction qui vérifie que l'adresse mail est valide (quelqu'un qui s'y connait en HTML peut modifier le type email en type texte)
                {
                    $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                    $reqmail->execute(array($mail));
                    $mailExist = $reqmail->rowCount();
                    if ($mailExist == 0) {
                        //vérifie si l'adresse mail n'existe pas déjà dans la bdd. On peut faire la même chose pour le pseudo
                        if ($mdp == $mdp2)
                        //confirmation mdp
                        {
                            $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motDePasse) VALUES(?, ? ,?)");
                            $insertmbr->execute(array($pseudo, $mail, $mdp));
                            $valide = "Votre compte a bien été créé ! <a class=\"meConnecter\" href=\"connexion.php\"> Me connecter</a>";
                            //fonction pour inscrire l'utilisateur.
                            /*
                            header('Location: tuto-javascript3.php');
                            */
                            //renvoi vers la page d'accueil
                        } else
                        //confirmation mdp erreur 
                        {
                            $erreur = "Vos mots de passes ne correspondent pas !";
                        }
                    } else
                    //Si le mail existe déjà erreur
                    {
                        $erreur = "Adresse mail déjà utilisée !";
                    }
                } else
                //adresse mail non valide
                {
                    $erreur = "Votre adresse mail n'est pas valide' !";
                }
            } else
            //confirmation mail erreur 
            {
                $erreur = "Vos adresses mail ne correspondent pas !";
            }
        } else
        //nombre de caractères erreur 
        {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }
    } else
    //Si les champs ne sont pas remplis erreur 
    {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

?>
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

        <form action="" method="POST" id="formInscription" class="row centerH centerV">

            <div class="container column centerH centerV">
                <div class="bloc-form column centerH">

                    <div class="row centerH">
                        <legend>Formulaire d'inscription</legend>
                    </div>

                    <div class="column centerH centerV">
                        <div class="column">
                            <label for="pseudo">Nom d'utilisateur :</label>
                            <input type="text" name="pseudo" id="pseudo" placeholder="Pseudo" value="<?php if (isset($pseudo)) {
                                                                                                            echo $pseudo;
                                                                                                        } ?>" />
                            <span id="errLogin" class="erreur"></span>
                        </div>
                        <div class="column">
                            <label for="mail">Email :</label>
                            <input type="email" name="mail" id="mail" placeholder="pompom@gmail.com" value="<?php if (isset($mail)) {
                                                                                                                echo $mail;
                                                                                                            } ?>" />
                            <span id="errMail" class="erreur"></span>
                        </div>
                        <div class="column">
                            <label for="mail2">Confirmation de l'email :</label>
                            <input type="email" name="mail2" id="mail2" placeholder="pompom@gmail.com" value="<?php if (isset($mail2)) {
                                                                                                                    echo $mail2;
                                                                                                                } ?>" />
                            <span id="errMail2" class="erreur"></span>
                        </div>
                        <div class="column">
                            <label for="mdp">Mot de passe :</label>
                            <input type="password" name="mdp" id="mdp" placeholder="Mot de passe" />
                            <span id="errMdp" class="erreur"></span>
                        </div>
                        <div class="column">
                            <label for="mdp2">Confirmation du mot de passe :</label>
                            <input type="password" name="mdp2" id="mdp2" placeholder="Confirmation du mot de passe" />
                            <span id="errMdp2" class="erreur"></span>
                        </div>
                    </div>

                    <div class="row centerH">
                        <input id="envoyer" name="formInscription" type="submit" value="Envoyer" />
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