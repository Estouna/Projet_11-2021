<?php session_start(); ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/tutoJava-all.css">
    <link rel="stylesheet" href="./css/tuto-javascript3.css">
    <title>JavaScript</title>
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
                    <?php if (isset($_SESSION['id'])) { ?>
                        <li>
                            <a class="span-a1" href="profil.php"><?= $_SESSION['pseudo'] ?></a>
                        </li>
                    <?php } else { ?>
                        <li>
                            <a href="connexion.php"><span class="span-a1">C</span><span class="span-a1">O</span><span class="span-a1">N</span><span class="span-a1">N</span><span class="span-a1">E</span><span class="span-a1">X</span><span class="span-a1">I</span><span class="span-a1">O</span><span class="span-a1">N</span></a>
                        </li>
                    <?php }  ?>
                </ul>
            </nav>
        </div>
    </header>






    <!-- ____________________ MENU HAUT DE PAGE ____________________ -->
    <nav id="nav1" class="unselectable column centerH centerV">
        <ul class='navul1'>
            <li><a href="#javascript">Qu???est-ce que le JavaScript ?</a></li>
            <li><a href="#definition"><em>Une d??finition g??n??rale</em></a></li>
            <li><a href="#peut-faire"><em>Que peut-il vraiment faire ?</em></a></li>
            <li><a href="#que-fait"><em>Que fait JavaScript sur votre page????</em></a></li>
        </ul>
        <ul class='navul2'>
            <li><a href="#prem-code">Notre premier code JavaScript</a></li>
            <li><a href="#penser-comme"><em>Penser comme un programmeur</em></a></li>
            <li><a href="#ajouter-java"><em>Comment ajouter du JavaScript ?? votre page????</em></a></li>
            <li><a href="#ex-jeu"><em>Exemple ??? Jeu : Guess the number</em></a></li>
        </ul>
        <ul class='navul3'>
            <li><a href="#debogue">D??boguer du code JavaScript</a></li>
            <li><a href="#types-erreurs"><em>Types d' erreurs</em></a></li>
            <li><a href="#reparer"><em>R??parer les erreurs de syntaxe</em></a></li>
            <li><a href="#erreur-logique"><em>Une erreur de logique</em></a></li>
        </ul>
        <ul class='navul4'>
            <li><a href="#position">Les variables</a></li>
            <li><a href="#affichage"><em>Qu'est ce qu'une variable????</em></a></li>
            <li><a href="#positionnement"><em>D??clarer une variable</em></a></li>
            <li><a href="#varLet"><em>La diff??rence entre var et let</em></a></li>
        </ul>
        <ul class='navul5'>
            <li><a href="#listes">Math??matiques de base en JavaScript</a></li>
            <li><a href="#operateurs"><em>Op??rateurs arithm??tiques</em></a></li>
            <li><a href="#increDecrem"><em>Incr??mentation et d??cr??mentation</em></a></li>
            <li><a href="#assign"><em>Op??rateurs d'assignation</em></a></li>
        </ul>
        <ul class='navul6'>
            <li><a href="#tableaux">Cha??nes de caract??res en JavaScript</a></li>
            <li><a href="#typebordure"><em>Cha??nes de caract??res ??? les bases</em></a></li>
            <li><a href="#cellules"><em>Concat??nation de cha??nes</em></a></li>
            <li><a href="#positiontitre"><em>Conclusion</em></a></li>
        </ul>
        <ul class='navul7'>
            <li><a href="#autres">Les tableaux</a></li>
            <li><a href="#curseur"><em>Qu'est???ce qu'un tableau????</em></a></li>
            <li><a href="#commentaires"><em>Affichons les produits???!</em></a></li>
        </ul>
    </nav>






    <!-- ____________________ MENU BURGER ____________________ -->
    <div id="block-nav">
        <div class="btn">

            <div class="spin-container">

                <div class="front">
                    <div class="bar b1"></div>
                    <div class="bar b2"></div>
                    <div class="bar b3"></div>
                </div>

                <div class="back">
                    <div class="bar b1 b-back"></div>
                    <div class="bar b3 b-back"></div>
                </div>
            </div>

        </div>
        <nav id='nav2' class="unselectable column centerH centerV">

            <div class="menu-wrap1">
                <ul class='navul1b'>
                    <li><a class="nav-link" href="#javascript">Qu???est-ce que le JavaScript ?</a></li>
                    <li><a class="nav-link" href="#definition"><em>Une d??finition g??n??rale</em></a></li>
                    <li><a class="nav-link" href="#peut-faire"><em>Que peut-il vraiment faire????</em></a></li>
                    <li><a class="nav-link" href="#que-fait"><em>Que fait JavaScript sur votre page????</em></a></li>
                </ul>
                <ul class='navul2b'>
                    <li><a class="nav-link" href="#prem-code">Premier code JavaScript</a></li>
                    <li><a class="nav-link" href="#penser-comme"><em>Penser comme un programmeur</em></a></li>
                    <li><a class="nav-link" href="#ajouter-java"><em>Ajouter du JavaScript ?? votre page????</em></a></li>
                    <li><a class="nav-link" href="#ex-jeu"><em>Exemple ??? Jeu : Guess the number</em></a></li>
                </ul>
                <ul class='navul3b'>
                    <li><a class="nav-link" href="#debogue">D??boguer du code JavaScript</a></li>
                    <li><a class="nav-link" href="#types-erreurs"><em>Types d' erreurs</em></a></li>
                    <li><a class="nav-link" href="#reparer"><em>R??parer les erreurs de syntaxe</em></a></li>
                    <li><a class="nav-link" href="#erreur-logique"><em>Une erreur de logique</em></a></li>
                </ul>
                <ul class='navul4b'>
                    <li><a class="nav-link" href="#position">Les variables</a></li>
                    <li><a class="nav-link" href="#affichage"><em>Qu'est ce qu'une variable????</em></a></li>
                    <li><a class="nav-link" href="#positionnement"><em>D??clarer une variable</em></a></li>
                    <li><a class="nav-link" href="#varLet"><em>La diff??rence entre var et let</em></a></li>
                </ul>
            </div>
            <div class="menu-wrap2">
                <ul class='navul5b'>
                    <li><a class="nav-link" href="#listes">Math??matiques de base en JavaScript</a></li>
                    <li><a class="nav-link" href="#operateurs"><em>Op??rateurs arithm??tiques</em></a></li>
                    <li><a class="nav-link" href="#increDecrem"><em>Incr??mentation et d??cr??mentation</em></a></li>
                    <li><a class="nav-link" href="#assign"><em>Op??rateurs d'assignation</em></a></li>
                </ul>
                <ul class='navul6b'>
                    <li><a class="nav-link" href="#tableaux">Cha??nes de caract??res en JavaScript</a></li>
                    <li><a class="nav-link" href="#typebordure"><em>Cha??nes de caract??res ??? les bases</em></a></li>
                    <li><a class="nav-link" href="#cellules"><em>Concat??nation de cha??nes</em></a></li>
                    <li><a class="nav-link" href="#positiontitre"><em>Conclusion</em></a></li>
                </ul>
                <ul class='navul7b'>
                    <li><a class="nav-link" href="#autres">Les tableaux</a></li>
                    <li><a class="nav-link" href="#curseur"><em>Qu'est???ce qu'un tableau????</em></a></li>
                    <li><a class="nav-link" href="#commentaires"><em>Affichons les produits???!</em></a></li>
                </ul>
            </div>
        </nav>
    </div>










    <main class="main column centerH centerV">
        <!-- ____________________ SECTION 1 ____________________ -->
        <section id="section-1">
            <div class="h2 row centerH">
                <h2 id="javascript" class="h2-section1">Qu???est-ce que le JavaScript ?</h2>
            </div>
            <h3 id="definition" class="h3-section1">Une d??finition g??n??rale</h3>
            <p>
                JavaScript est un langage de programmation qui permet d???impl??menter des m??canismes complexes sur une
                page
                web. ?? chaque fois qu???une page web fait plus que simplement afficher du contenu statique comme :<br>
                <br>
                - afficher du contenu mis ?? jour ?? des temps d??termin??s,<br>
                - des cartes interactives,<br>
                - des animations 2D/3D,<br>
                - des menus vid??o d??filants,<br>
                - etc...<br>
                JavaScript a de bonnes chances d?????tre impliqu??.<br>
                <br>
                C???est la troisi??me couche des technologies standards du web, apr??s HTML et CSS.<br>
            </p>
            <ul class="ul-para">
                <li>
                    <p>
                        HTML est un langage de balises utilis?? pour structurer et donner du sens au contenu web.<br>
                        Par exemple : d??finir des paragraphes, titres et tables de donn??es ou encore int??grer des images
                        ou
                        des vid??os dans une page.
                    </p>
                </li>
                <li>
                    <p>
                        CSS est un langage de r??gles de style utilis?? pour mettre en forme le contenu HTML.<br>
                        Par exemple : en modifiant la couleur d???arri??re-plan ou les polices, ou en disposant le contenu
                        en
                        plusieurs colonnes.
                    </p>
                </li>
                <li>
                    <p>
                        JavaScript est un langage de programmation qui permet de cr??er du contenu mis ?? jour de fa??on
                        dynamique, de contr??ler le contenu multim??dia, d???animer des images, et tout ce ?? quoi on peut
                        penser.<br>
                        Bon, peut-??tre pas tout, mais vous pouvez faire bien des choses avec quelques lignes de
                        JavaScript.
                    </p>
                </li>
            </ul>
            <p>
                <br>
                Les trois couches se superposent naturellement. Prenons pour exemple une simple ??tiquette texte.<br>
                - Les balises HTML lui donnent une structure et un but???:<br>
                <span class="ex-code">&lt;p&gt;Player 1: Chris&lt;/p&gt;<br></span>
                Player 1: Chris<br>
                - Nous pouvons ensuite ajouter du CSS pour rendre cela plus joli???:<br>
                <span class="ex-code">
                    p{<br>
                    &emsp;font-family: 'Poppins-SemiBold', helvetica, sans-serif;<br>
                    &emsp;letter-spacing: 1px;<br>
                    &emsp;text-transform: uppercase;<br>
                    &emsp;text-align: center;<br>
                    &emsp;border: 2px solid white;<br>
                    &emsp;background: rgb(4, 133, 255));<br>
                    &emsp;color: white;<br>
                    &emsp;box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.589);<br>
                    &emsp;border-radius: 10px;<br>
                    &emsp;padding: 4px 10px;<br>
                    &emsp;display: inline-block;<br>
                    &emsp;cursor:pointer;<br>
                    }
                </span>
            </p>
            <div class="p-exemple row centerH centerV">
                <p class="p-player">
                    PLAYER 1: CHRIS
                </p>
            </div>
            <p>
                - Et enfin utiliser JavaScript pour ajouter un comportement dynamique???:<br>
                <span class="ex-code">
                    let para = document.querySelector('p');<br>
                    <br>
                    para.addEventListener('click', updateName);<br>
                    <br>
                    function updateName(){<br>
                    &emsp;let name = prompt('Enter a new name');<br>
                    &emsp;para.textContent = 'Player 1: ' + name;<br>
                    }
                </span>
            </p>
            <div class="p-exempleJs row centerH centerV">
                <p class="p-player">
                    PLAYER 1: CHRIS
                </p>
            </div>
            <p>Essayez de cliquer sur l?????tiquette texte pour voir ce qui se passe.</p>
            <hr>
            <h3 id="peut-faire" class="h3-section1a">Que peut-il vraiment faire????</h3>
            <p>Le c??ur de JavaScript est constitu?? de fonctionnalit??s communes de programmation permettant de???:</p>
            <ul class="ul-para">
                <li>
                    <p>
                        - stocker des valeurs utiles dans des variables.<br>
                        Dans l???exemple plus haut, nous demandons un nouveau nom ?? l???utilisateur puis le stockons dans
                        une
                        variable appel??e name.<br>
                        <span class="ex-code">let name = prompt('Enter a new name');</span>
                    </p>
                </li>
                <li>
                    <p>
                        - faire des op??rations sur des morceaux de texte<br>
                        (appel??s en programmation ?????cha??nes de caract??res????? ou ?????strings????? en anglais).<br>
                        Dans l???exemple plus haut, nous prenons la cha??ne de caract??res "Player 1: " et lui adjoignons la
                        variable name pour cr??er l?????tiquette ''Player 1: Chris"<br>
                        <span class="ex-code">para.textContent = 'Player 1: ' + name;</span>
                    </p>
                </li>
                <li>
                    <p>
                        ex??cuter du code en r??ponse ?? certains ??v??nements se produisant sur une page web.<br>
                        Dans l???exemple, nous avons utilis?? un ??v??nement (?????event?????) click (en-US) pour d??tecter quand
                        l???utilisateur clique sur le bouton; on ex??cute alors le code qui met ?? jour l?????tiquette.<br>
                        <span class="ex-code">para.addEventListener('click', updateName);</span>
                    </p>
                </li>
                <li>
                    <p>Et bien plus encore???!</p>
                </li>
            </ul>
            <br>
            <p>
                L?? o?? ??a devient excitant, c???est que de nombreuses fonctionnalit??s sont bas??es sur ce c??ur de
                JavaScript.<br>
                Les ?????interfaces de programmation applicatives????? (APIs pour ?????Application Programming Interfaces?????)
                donnent
                acc??s ?? des quasi-superpouvoirs dans votre code JavaScript.<br>
                <br>
                Les API sont des blocs de code d??j?? pr??ts qui permettent ?? un d??veloppeur d'impl??menter des programmes
                qui
                seraient difficiles voire impossibles ?? impl??menter sans elles.<br>
                C'est comme du code "en kit" pour la programmation, tr??s pratiques ?? assembler et ?? combiner.
                Les API sont au code ce que les meubles en kits sont aux fournitures de maison.<br>
                <br>
                Il est beaucoup plus facile de prendre des panneaux pr??ts ?? l'emploi et de les visser ensemble pour
                faire une ??tag??re que de travailler vous-m??me sur le design,
                d'aller chercher le bon bois, de couper tous les panneaux ?? la bonne taille et la bonne forme, de
                trouver les vis de la bonne taille, puis les assembler pour faire une ??tag??re.<br>
                <br>
                <br>
                <br>
                Elles se divisent g??n??ralement en deux cat??gories???:<br>
                <br>
                <span class="p-gras">Les APIs de navigateur</span> font partie int??grante de votre navigateur web, et
                peuvent acc??der ?? des donn??es de l???environnement informatique (l???ordinateur), ou faire d'autres choses
                complexes.<br>
                <br>
                Par exemple???:
            </p>
            <ul class="ul-para">
                <li>
                    <p>
                        l???API DOM (Document Object Model) permet de manipuler du HTML et du CSS<br>
                        (cr??er, supprimer et modifier du HTML, appliquer de nouveaux styles ?? la page de fa??on
                        dynamique, etc...).<br>
                        Chaque fois que vous voyez une fen??tre popup sur une page ou du nouveau contenu appara??tre<br>
                        (comme dans notre d??monstration plus haut), il s???agit d'une action du DOM.
                    </p>
                </li>
                <li>
                    <p>
                        l???API de g??olocalisation r??cup??re des informations g??ographiques.<br>
                        C???est ainsi que Google Maps peut trouver votre position et la situer sur une carte.
                    </p>
                </li>
                <li>
                    <p>
                        les APIs Canvas et WebGL permettent de cr??er des animations 2D et 3D.<br>
                        On fait des choses incroyables avec ces technologies, voyez Chrome Experiments et webglsamples.
                    </p>
                </li>
                <li>
                    <p>
                        les APIs Audio et Video, comme HTMLMediaElement et WebRTC permettent des actions int??ressantes
                        sur le multim??dia,<br>
                        telles que jouer de l???audio ou de la vid??o directement dans une page web,<br>
                        ou r??cup??rer le flux vid??o de votre webcam et l???afficher sur l???ordinateur de quelqu???un
                        d???autre<br>
                        (essayez la Snapshot demo pour vous faire une id??e).
                    </p>
                </li>
            </ul>
            <p class="note">
                Note???: beaucoup des exemples ci-dessus ne fonctionneront pas dans un ancien navigateur.<br>
                Il vaut mieux utiliser un navigateur moderne comme Firefox, Chrome, Edge ou Opera pour ex??cuter votre
                code et faire vos tests.<br>
                Si vous ??tes amen?? ?? ??crire du code de production (c???est-??-dire destin?? ?? de v??ritables
                utilisateurs),<br>
                il vous faudra prendre en compte la compatibilit?? pour diff??rents navigateurs.
            </p>
            <br>
            <p>
                <span class="p-gras">Les APIs tierces</span> ne font par d??faut pas partie de votre navigateur, et vous
                devrez en g??n??ral r??cup??rer le code et les informations les concernant quelque part sur le web.<br>
                <br>
                Par exemple???:
            </p>
            <ul class="ul-para">
                <li>
                    <p>
                        l???API Twitter vous permet par exemple d'afficher vos derniers tweets sur votre site.
                    </p>
                </li>
                <li>
                    <p>
                        l???API Google Maps permet d???int??grer ?? votre site des cartes personnalis??es et d???autres
                        fonctionnalit??s de ce type.
                    </p>
                </li>
            </ul>
            <p class="note">
                Note???: ces APIs sont d???un niveau avanc?? et nous ne couvrerons aucune d???entre elles dans ce cours, mais
                les liens ci-dessus fournissent une large documentation si vous voulez en savoir davantage.
            </p>
            <br>
            <p>
                Et il y a bien plus???encore ! Pas de pr??cipitation cependant.<br>
                Vous ne serez pas en mesure de cr??er le nouveau Facebook, Google Maps ou Instagram apr??s une journ??e de
                travail sur JavaScript,<br>
                il y a d???abord beaucoup de bases ?? assimiler. Et c???est pourquoi vous ??tes ici. Allons-y???!
            </p>

            <hr>
            <h3 id="que-fait" class="h3-section1b">Que fait JavaScript sur votre page????</h3>
            <p>
                Ici nous allons commencer ?? r??ellement nous int??resser au code, et, ce faisant, ?? explorer ce qui se
                passe quand vous ex??cutez du JavaScript dans votre page.<br>
                <br>
                Commen??ons par un bref r??capitulatif de ce qui se passe lorqu'une page web se charge dans le
                navigateur.<br>
                Quand la page se charge, les codes HTML, CSS et JavaScript s'ex??cutent dans un environnement (l???onglet
                du navigateur).<br>
                C???est un peu comme une usine qui prend des mati??res premi??res (le code) et sort un produit (la page
                web).<br>
                <br>
                Le JavaScript est ex??cut?? par le moteur JavaScript du navigateur, apr??s que le HTML et le CSS ont ??t??
                assembl??s et combin??s en une page web.<br>
                Cet encha??nement est n??cessaire pour ??tre s??r que la structure et le style de la page sont d??j?? en place
                quand le JavaScript commence son ex??cution.<br>

                C???est une bonne chose, ??tant donn?? qu???un usage fr??quent de JavaScript est de modifier dynamiquement le
                HTML et le CSS pour mettre ?? jour l???interface utilisateur, via l???API DOM comme ??voqu?? plus t??t.<br>
                Charger le JavaScript et essayer de l???ex??cuter avant que le HTML et le CSS ne soient en place m??nerait ??
                des erreurs
            </p>
            <h4>Ordre d???ex??cution du JavaScript :</h4>
            <p>
                Quand le navigateur rencontre un bloc de JavaScript, il l???ex??cute g??n??ralement dans l???ordre, de haut en
                bas.<br>
                Vous devrez donc faire attention ?? l???ordre dans lequel vous ??crivez les choses.<br>
                <br>
                Reprenons le bloc de JavaScript vu dans notre premier exemple???:<br>
                <br>
                // Nous s??lectionnons ici un paragraphe de texte //<br>
                <span class="ex-code">
                    let para = document.querySelector('p');
                </span>
                <br>
                /* Nous lui attachons un ????couteur d'??v??nement?? (event listener) pour qu'ensuite,<br>
                lors d???un clic sur le paragraphe, le bloc de code updateName() s???ex??cute. */<br>
                <span class="ex-code">
                    para.addEventListener('click', updateName);
                </span>
                <br>
                /* Nous ajoutons le bloc de code updateName() (ces blocs de code r??utilisables sont appel??s
                ?????fonctions?????)<br>
                qui demande ?? l???utilisateur un nouveau nom, et l???ins??re dans le paragraphe pour mettre ?? jour
                l???affichage.*/<br>
                <span class="ex-code">
                    function updateName(){<br>
                    &emsp;let name = prompt('Enter a new name'); <br>
                    &emsp;para.textContent = 'Player 1: ' + name; <br>
                    }
                </span>
                <br>
                Si vous ??changiez les deux premi??res lignes de code, rien ne fonctionnerait plus, vous obtiendriez une
                erreur dans la console d??veloppeur du navigateur???:<br>
                TypeError: para is undefined.<br>
                Cela signifie que l???objet para n???existe pas encore, donc nous ne pouvons pas y ajouter d?????couteur
                d'??v??nement.<br>
            </p>
            <p class="note">
                Note : c???est une erreur tr??s fr??quente. Il faut veiller ?? ce que les objets r??f??renc??s dans votre code
                existent avant d'essayer de les utiliser.<br>
            </p>
            <h4>Code interpr??t?? contre code compil?? :</h4>
            <p>
                En informatique, on parle de code interpr??t?? ou compil??. JavaScript est un langage interpr??t?? :<br>
                le code est ex??cut?? de haut en bas et le r??sultat du code ex??cut?? est envoy?? imm??diatement.<br>
                Vous n???avez pas ?? transformer le code en une autre forme avant que le navigateur ne l???ex??cute.<br>
                Les langages compil??s quant ?? eux sont transform??s (compil??s) en une autre forme avant d?????tre ex??cut??s
                par l???ordinateur.<br>
                Par exemple le C et le C++ sont compil??s en langage assembleur qui est ensuite ex??cut?? par
                l???ordinateur.<br>
                Chaque approche a ses avantages, ce que nous ne d??velopperons pas pour l???instant.<br>
            </p>
            <h4>Code c??t?? client contre c??t?? serveur :</h4>
            <p>
                Vous pouvez aussi rencontrer les termes de code c??t?? serveur et c??t?? client, notamment dans le contexte
                du d??veloppement web.<br>
                Le code c??t?? client est du code ex??cut?? sur l???ordinateur de l???utilisateur :<br>
                quand une page web est vue, le code c??t?? client de la page est t??l??charg??, puis ex??cut?? et affich?? par
                le navigateur.<br>
                Dans ce module JavaScript, nous parlons explicitement de JavaScript c??t?? client.<br>
                Le code c??t?? serveur quant ?? lui est ex??cut?? sur le serveur, puis ses r??sultats sont t??l??charg??s et
                affich??s par le navigateur.<br>
                Citons comme langages web c??t?? serveur populaires le PHP, Python, Ruby, et ASP.NET.<br>
                Et JavaScript???! JavaScript peut aussi s???utiliser comme un langage c??t?? serveur, par exemple dans le
                populaire environnement Node.js.<br>
            </p>
            <h4>Code dynamique contre code statique :</h4>
            <p>
                Le mot dynamique est utilis?? tant pour qualifier le JavaScript c??t?? client que les langages c??t??
                serveur.<br>
                Il se r??f??re ?? la capacit?? de mettre ?? jour l???affichage d???une page/application web pour montrer des
                choses diff??rentes en des circonstances diff??rentes, en g??n??rant un nouveau contenu quand
                n??cessaire.<br>
                Le code c??t?? serveur g??n??re dynamiquement du nouveau contenu sur le serveur, par exemple en lisant une
                base de donn??es, tandis que le JavaScript c??t?? client peut g??n??rer dynamiquement un contenu nouveau dans
                le navigateur, par exemple en cr??ant une nouvelle table HTML, en y ins??rant les donn??es demand??es au
                serveur, puis en affichant la table dans une page web. Selon le contexte, le terme dynamique prend un
                sens un peu diff??rent, mais les deux sont tr??s li??s, et les deux approches (c??t?? serveur et client) vont
                souvent de pair.<br>
                Une page web sans contenu mis ?? jour dynamiquement est appel?? statique : elle montre simplement toujours
                le m??me contenu.
            </p>
        </section>





        <a class="inscription unselectable" href="form3.php">Inscrivez-vous pour lire la suite</a>



        <!-- ____________________ SECTION 2 ____________________ -->
        <section id="section-2">
            <div class="degrade">
                <div class="h2 row centerH">
                    <h2 id="prem-code" class="h2-section2">Notre premier code JavaScript</h2>
                </div>
                <h3 id="penser-comme" class="h3-section2">Penser comme un programmeur</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet tempora quam culpa ex minima
                    aliquid
                    alias numquam ipsa reiciendis quae porro dicta, itaque ipsum, nisi modi expedita eaque
                    assumenda!
                    Repellendus!
                </p>
                <h3 id="ajouter-java" class="h3-section2a">Ajouter du JavaScript ?? votre page????</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, quae ducimus perspiciatis
                    magni
                    sequi ea provident qui magnam optio obcaecati aut quaerat omnis iusto, nam quia ut, velit alias
                    fuga?
                </p>
                <h3 id="ex-jeu" class="h3-section2b">Exemple ??? Jeu : Guess the number</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti libero ratione est fugiat
                    porro in
                    totam illum laborum veritatis odio. Quam, error laboriosam laborum aspernatur tempora aliquid
                    inventore nihil optio labore corporis deserunt. Laborum ut, sapiente cupiditate ea
                    exercitationem
                    unde fuga nostrum nobis mollitia et, iste ipsam, eius fugiat quaerat ad quia voluptate non
                    voluptatum consequatur quidem animi aut eveniet placeat? Doloribus harum esse voluptates libero
                    id
                    quisquam sint, error, ex illo quas laboriosam suscipit! Odio quasi minus deleniti expedita
                    maxime
                    inventore reprehenderit voluptas repellendus facilis dignissimos nulla optio quisquam, excepturi
                    dolorem odit provident animi est voluptates. Qui, necessitatibus at.
                </p>
            </div>
        </section>

    </main>
    <script src="./js/tuto-javascript3.js"></script>
</body>

</html>