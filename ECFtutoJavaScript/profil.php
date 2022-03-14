<?php

session_start();

require('Db/database.php');

if (isset($_SESSION['id'])) {
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($_SESSION['id']));
    $userinfo = $requser->fetch();
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/profil.css">
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

        <main class="mainProfil row centerH">
            <div class="block-container column centerV">
                <div class="bienvenue row centerV centerH">
                    <h2>Bienvenue <?php echo $userinfo['pseudo']; ?></h2>
                </div>
                <div class="block row centerV">
                    <div class="pseuMail column centerV centerH">

                        <div class="pseudo column centerV centerH">
                            <p class="p-pseudo">Mon pseudo : <br /></p>
                            <?php echo $userinfo['pseudo']; ?>
                        </div>
                        <div class="email column centerV centerH">
                            <p class="p-email">Mon email : <br /></p>
                            <?php echo $userinfo['mail']; ?>
                        </div>

                    </div>

                    <?php
                    if (isset($_SESSION['id']) and $userinfo['id'] == $_SESSION['id']) { //exemple: comment afficher quelque chose d'unique au propriétaire du profil (si la personne est connectée et qu' id utilisateur = id session) 
                    ?>
                        <div class="block-links column centerH centerV">
                            <a class="a-edition row centerH centerV" href="edition-profil.php">Editer mon profil</a>
                            <a class="a-deconnexion row centerH centerV" href="deconnexion.php">Se déconnecter</a>
                        </div>
                    <?php
                    }
                    ?>

                </div>
            </div>
        </main>

    </body>

    </html>
<?php
}
?>