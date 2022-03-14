<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reference.css">
    <link rel="stylesheet" href="./css/tutoJava-all.css">
    <title>Référence</title>
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
                    <span class="li-title">Les instructions conditionnelles</span>
                    <li><a class="nav-link" href="#ifElseSwitch">if | else | else if | switch</a></li>
                    <li><a class="nav-link" href="#if"><em>if</em></a></li>
                    <li><a class="nav-link" href="#else"><em>else</em></a></li>
                    <li><a class="nav-link" href="#elseif"><em>else if</em></a></li>
                    <li><a class="nav-link" href="#switch"><em>switch, break et default</em></a></li>
                </ul>
                <ul class='navul2b'>
                    <span class="li-title">Les boucles</span>
                    <li><a class="nav-link" href="#forInOfEach">for | for/in | for/of | foreach()</a></li>
                    <li><a class="nav-link" href="#for"><em>for</em></a></li>
                    <li><a class="nav-link" href="#"><em>for/in</em></a></li>
                    <li><a class="nav-link" href="#"><em>for/of</em></a></li>
                    <li><a class="nav-link" href="#foreach"><em>foreach()</em></a></li>
                </ul>
            </div>
            <div class="menu-wrap2">
                <ul class='navul3b'>
                    <span class="li-title">Les Fonctions</span>
                    <li><a class="nav-link" href="#">...</a></li>
                    <li><a class="nav-link" href="#"><em>...</em></a></li>
                    <li><a class="nav-link" href="#"><em>...</em></a></li>
                    <li><a class="nav-link" href="#"><em>...</em></a></li>
                </ul>
                <ul class='navul4b'>
                    <span class="li-title">Les "on verra"</span>
                    <li><a class="nav-link" href="#">...</a></li>
                    <li><a class="nav-link" href="#"><em>...</em></a></li>
                    <li><a class="nav-link" href="#"><em>...</em></a></li>
                    <li><a class="nav-link" href="#"><em>...</em></a></li>
                </ul>
            </div>
        </nav>
    </div>





    <main class="main column centerH centerV">

        <div class="div-h1 row centerH centerV">
            <h1 id="h1">Référence du JavaScript</h1>
        </div>

        <section class="section-1 column centerH">

            <h1 id="h1-section">Les instructions conditionnelles</h1>

            <h3>Description</h3>
            <p>
                Très souvent, lorsque vous écrivez du code, vous souhaitez effectuer différentes actions pour
                différentes décisions.<br />
                <br />
                Vous pouvez utiliser des instructions conditionnelles dans votre code pour ce faire.<br />
                <br />
                En JavaScript, nous avons les instructions conditionnelles suivantes :<br />
                <br />
                - Utilisez <span class="vert">if</span> :<br />
                pour spécifier un bloc de code à exécuter, si une condition spécifiée est vraie<br />
                - Utilisez <span class="vert">else</span> :
                pour spécifier un bloc de code à exécuter, si la même condition est fausse<br />
                - Utilisez <span class="vert">else if</span> :<br />
                pour spécifier une nouvelle condition à tester, si la première condition est
                - fausse<br />
                - Utiliser <span class="vert">switch</span> :<br />
                pour spécifier de nombreux blocs de code alternatifs à exécuter<br />

            </p>

            <div class="ref-title column">
                <h2 id="ifElseSwitch">if | else | else if | switch</h2>
                <span class="vert-ita">Instruction de bloc conditionnel</span>
            </div>

            <!-- 
                EXEMPLE 1 
            -->

            <h3 id="if">Exemple 1 : <span class="vert">if</span> ("si")</h3>
            <p>
                Instruction conditionnelle de test orientant l'exécution d'une portion de script, du genre "si ...
                alors..."<br />
                Le test if est vrai si l'expression entre parenthèse retourne une valeur différente de false.<br />
                Attention le test d'égalité s'écrit <span class="orange">==</span> et la différence s'écrit <span class="orange">!=</span>.<br />
            </p>
            <h4>Syntaxe</h4>
            <span class="ex-code">
                if (condition) {<br />
                &emsp;// bloc de code à exécuter si la condition est vraie<br />
                }<br />
            </span>
            <h4>Code source</h4>
            <span class="ex-code">
                &lt;p id="demo"&gt;Bonne soirée! &lt;/p&gt;<br />
                <br />
                &lt;script&gt;<br />
                if (new Date().getHours() &lt; 18) {<br />
                &emsp;document.getElementById("demo").innerHTML = "Bonne journée!";<br />
                }<br />
                &lt;/script&gt;
            </span>
            <h4>Résultat</h4>
            <div class="fond-resultat">
                <p id="demo">Bonne soirée!</p>
                <script>
                    if (new Date().getHours() < 18) {
                        document.getElementById("demo").innerHTML = "Bonne journée!";
                    }
                </script>
            </div>
            <h4>Explication</h4>
            <p>
                Test l'heure actuelle et affiche un message selon l'heure de la journée.<br />
                Utilisez l'instruction if pour spécifier un bloc de code JavaScript à exécuter si une condition est
                vraie.
            </p>

            <!-- 
                EXEMPLE 2 
            -->

            <h3 id="else">Exemple 2 : <span class="vert">else</span> ("sinon")</h3>
            <p>
                Utilisez l'instruction else pour spécifier un bloc de code à exécuter si la condition est fausse.
            </p>
            <h4>Syntaxe</h4>
            <span class="ex-code">
                if (condition) {<br />
                &emsp;// bloc de code à exécuter si la condition est vraie<br />
                } else {<br />
                &emsp;// bloc de code à exécuter si la condition est fausse<br />
                }
            </span>
            <h4>Code source</h4>
            <span class="ex-code">
                &lt;p id="salutation"&gt;&lt;/p&gt;<br />
                <br />
                &lt;script&gt;<br />
                &emsp;const hour = new Date().getHours();<br />
                &emsp;let greeting;<br />
                <br />
                &emsp;if (hour &lt; 18) {<br />
                &emsp;&emsp;greeting = "Bonne journée";<br />
                &emsp;} else {<br />
                &emsp;&emsp;greeting = "Bonne soirée";<br />
                }<br />
                &emsp;document.getElementById("salutation").innerHTML = greeting;<br />
                &lt;/script&gt;
            </span>
            <h4>Résultat</h4>
            <div class="fond-resultat">
                <p id="salutation"></p>
                <script>
                    const hour = new Date().getHours();
                    let greeting;

                    if (hour < 18) {
                        greeting = "Bonne journée";
                    } else {
                        greeting = "Bonne soirée";
                    }

                    document.getElementById("salutation").innerHTML = greeting;
                </script>
            </div>
            <h4>Explication</h4>
            <p>
                Si l'heure est inférieure à 18 heures, créez un message « Bonjour », sinon « Bonsoir »
            </p>

            <!-- 
                EXEMPLE 3 
            -->

            <h3 id="elseif">Exemple 3 : <span class="vert">else if</span>
            </h3>
            <p>
                Utilisez l'instruction else if pour spécifier une nouvelle condition si la première condition est
                fausse.<br />
                Le test if est vrai si l'expression entre parenthèse retourne une valeur différente de false.<br />
            </p>
            <h4>Syntaxe</h4>
            <span class="ex-code">
                if (condition 1) {<br />
                &emsp;// bloc de code à exécuter si la condition 1 est vraie<br />
                } else if (condition 2) {<br />
                &emsp;// bloc de code à exécuter si la condition 1 est fausse et la condition 2 est vraie<br />
                } else {<br />
                &emsp;// bloc de code à exécuter si la condition 1 est fausse et la condition 2 est fausse<br />
                }
            </span>
            <h4>Code source</h4>
            <span class="ex-code">
                &lt;p id="salut"&gt;Bonne soirée&lt;/p&gt;<br />
                <br />
                &lt;script&gt;<br />
                &emsp;const time = new Date().getHours();<br />
                &emsp;let greeting;<br />
                <br />
                &emsp;if (time &lt; 10) {<br />
                &emsp;&emsp;greeting = "Bonne matinée";<br />
                &emsp;} else if (time &lt; 20) {<br />
                &emsp;&emsp;greeting = "Bonne journée";<br />
                &emsp;} else {<br />
                &emsp;&emsp;greeting = "Bonne soirée";<br />
                }<br />
                <br />
                &emsp;document.getElementById("salut").innerHTML = greeting;<br />
                &lt;/script&gt;
            </span>
            <h4>Résultat</h4>
            <div class="fond-resultat">
                <p id="salut">Bonne soirée</p>
                <script>
                    const time = new Date().getHours();
                    let greeting;

                    if (time < 10) {
                        greeting = "Bonne matinée";
                    } else if (time < 20) {
                        greeting = "Bonne journée";
                    } else {
                        greeting = "Bonne soirée";
                    }

                    document.getElementById("salut").innerHTML = greeting;
                </script>
            </div>
            <h4>Explication</h4>
            <p>
                Notre exemple de salutations sépare la journée en plusieurs parties<br />
                - SI l'heure est inférieure à 10H afficher "Bonne matinée"<br />
                - SINON SI l'heure est inférieure à 20H afficher "Bonne journée"<br />
                - SINON afficher "Bonne soirée"
            </p>
            <!-- 
                EXEMPLE 4 
            -->

            <h3 id="switch">Exemple 4 : <span class="vert">switch</span>, <span class="vert">break</span>et <span class="vert">default</span></h3>
            <p>
                L'instruction switch est utilisée pour effectuer différentes actions en fonction de différentes
                conditions.<br />
                Voilà comment cela fonctionne:<br />
                <br />
                - L'expression de commutateur est évaluée une fois.<br />
                - La valeur de l'expression est comparée aux valeurs de chaque cas.<br />
                - S'il y a correspondance, le bloc de code associé est exécuté.<br />
                - S'il n'y a pas de correspondance, le bloc de code par défaut est exécuté.<br />
                <br />
                La pause: <br />
                Lorsque JavaScript atteint un break mot - clé, il sort du bloc de commutation.<br />
                Cela arrêtera l'exécution à l'intérieur du bloc de commutation.<br />
                Il n'est pas nécessaire de casser le dernier cas dans un bloc de commutation. Le bloc s'y casse (se
                termine) de toute façon.<br />
                <br />
                Remarque : Si vous omettez l'instruction break, le cas suivant sera exécuté même si l'évaluation ne
                correspond pas au cas.<br />


            </p>
            <h4>Syntaxe</h4>
            <span class="ex-code">
                switch(expression) {<br />
                &emsp;case x:<br />
                &emsp;&emsp;// code block<br />
                &emsp;&emsp;break;<br />
                &emsp;case y:<br />
                &emsp;&emsp;// code block<br />
                &emsp;&emsp;break;<br />
                &emsp;default:<br />
                &emsp;&emsp;// code block<br />
                }
            </span>
            <h4>Code source</h4>
            <span class="ex-code">
                &lt;p id="jour"&gt;&lt;/p&gt;<br />
                <br />
                &lt;script&gt;<br />
                &emsp;let day;<br />
                &emsp;switch (new Date().getDay()) {<br />
                &emsp;&emsp;case 0:<br />
                &emsp;&emsp;&emsp;&emsp;day = "dimanche";<br />
                &emsp;&emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;case 1:<br />
                &emsp;&emsp;&emsp;&emsp;day = "lundi";<br />
                &emsp;&emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;case 2:<br />
                &emsp;&emsp;&emsp;&emsp;day = "mardi";<br />
                &emsp;&emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;case 3:<br />
                &emsp;&emsp;&emsp;&emsp;day = "mercredi";<br />
                &emsp;&emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;case 4:<br />
                &emsp;&emsp;&emsp;&emsp;day = "jeudi";<br />
                &emsp;&emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;case 5:<br />
                &emsp;&emsp;&emsp;&emsp;day = "vendredi";<br />
                &emsp;&emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;case 6:<br />
                &emsp;&emsp;&emsp;&emsp;day = "samedi";<br />
                &emsp;}
                <br />
                &emsp;document.getElementById("jour").innerHTML = greeting;<br />
                &lt;/script&gt;
            </span>
            <h4>Résultat</h4>
            <div class="fond-resultat">
                <p id="jour"></p>

                <script>
                    let day;
                    switch (new Date().getDay()) {
                        case 0:
                            day = "dimanche";
                            break;
                        case 1:
                            day = "lundi";
                            break;
                        case 2:
                            day = "mardi";
                            break;
                        case 3:
                            day = "mercredi";
                            break;
                        case 4:
                            day = "jeudi";
                            break;
                        case 5:
                            day = "vendredi";
                            break;
                        case 6:
                            day = "samedi";
                    }
                    document.getElementById("jour").innerHTML = "Aujourd'hui c'est " + day;
                </script>
            </div>
            <h4>Explication</h4>
            <p>
                La getDay()méthode renvoie le jour de la semaine sous la forme d'un nombre compris entre 0 et
                6.<br />
                (Dimanche=0, Lundi=1, Mardi=2 ..)<br />
                Cet exemple utilise le numéro du jour de la semaine pour calculer le nom du jour de la semaine<br />
                <br />
            </p>
            <p>
            <h4>Le mot-clé default</h4>
            <p>Le mot-clé default spécifie le code à exécuter s'il n'y a pas de correspondance de casse :</p><br />
            <h4>Code source</h4>
            <span class="ex-code">
                &lt;p id="week-end"&gt;&lt;/p&gt;<br />
                <br />
                &lt;script&gt;<br />
                &emsp;let text;<br />
                &emsp;switch (new Date().getDay()) {<br />
                &emsp;&emsp;case 6:<br />
                &emsp;&emsp;&emsp;text = "Aujourd'hui c'est samedi";<br />
                &emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;case 0:<br />
                &emsp;&emsp;&emsp;text = "Aujourd'hui c'est dimanche";<br />
                &emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;default:<br />
                &emsp;&emsp;&emsp;text = "Dans l'attente du week-end";<br />
                }<br />
                document.getElementById("week-end").innerHTML = text;<br />
                &lt;/script&gt;
            </span>
            <h4>Résultat</h4>
            <div class="fond-resultat">
                <p id="week-end"></p>

                <script>
                    let text;
                    switch (new Date().getDay()) {
                        case 6:
                            text = "Aujourd'hui c'est samedi";
                            break;
                        case 0:
                            text = "Aujourd'hui c'est dimanche";
                            break;
                        default:
                            text = "Dans l'attente du week-end";
                    }
                    document.getElementById("week-end").innerHTML = text;
                </script>
            </div>
            <h4>Blocs de code communs</h4>
            <p>
                Parfois, vous aurez besoin que différents switch cases utilisent le même code.<br />
                Dans cet exemple, les cas 4 et 5 partagent le même bloc de code, et 0 et 6 partagent un autre bloc de
                code :<br />
            </p>
            </p>
            <h4>Code source</h4>
            <span class="ex-code">
                &lt;p id="week-endBis"&gt;&lt;/p&gt;<br />
                <br />
                &lt;script&gt;<br />
                &emsp;let text2;<br />
                &emsp;switch (new Date().getDay()) {<br />
                &emsp;&emsp;case 4:<br />
                &emsp;&emsp;case 5:<br />
                &emsp;&emsp;&emsp;text2 = "C'est bientôt le week-end";<br />
                &emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;case 0:<br />
                &emsp;&emsp;case 6:<br />
                &emsp;&emsp;&emsp;text2 = "C'est le week-end";<br />
                &emsp;&emsp;&emsp;break;<br />
                &emsp;&emsp;default:<br />
                &emsp;&emsp;&emsp;text2 = "Dans l'attente du week-end";<br />
                }<br />
                document.getElementById("week-endBis").innerHTML = text;<br />
                &lt;/script&gt;
            </span>
            <h4>Résultat</h4>
            <div class="fond-resultat">
                <p id="week-endBis"></p>

                <script>
                    let text2;
                    switch (new Date().getDay()) {
                        case 4:
                        case 5:
                            text2 = "Aujourd'hui c'est samedi";
                            break;
                        case 0:
                        case 6:
                            text2 = "Aujourd'hui c'est dimanche";
                            break;
                        default:
                            text2 = "Dans l'attente du week-end";
                    }
                    document.getElementById("week-endBis").innerHTML = text;
                </script>
            </div>

        </section>

        <section class="section-2 column centerH">

            <h1 id="h1-section">Les boucles</h1>

            <h3>Description</h3>
            <p>
                Les boucles sont pratiques si vous souhaitez exécuter le même code encore et encore, à chaque fois avec
                une valeur différente.<br />
                <br />
                C'est souvent le cas lorsque vous travaillez avec des tableaux :<br />
                Au lieu d'écrire :<br />
                <span class="ex-code">
                    text += cars[0] + "&lt;br&gt;";<br />
                    text += cars[1] + "&lt;br&gt;";<br />
                    text += cars[2] + "&lt;br&gt;";<br />
                    text += cars[3] + "&lt;br&gt;";<br />
                    text += cars[4] + "&lt;br&gt;";<br />
                    text += cars[5] + "&lt;br&gt;";<br />
                </span>
                Vous pouvez écrire :<br />
                <span class="ex-code">
                    for (let i = 0; i &lt; cars.length; i++) {<br />
                    &emsp;text += cars[i] + "&lt;br&gt;";<br />
                    }<br />
                </span>
                <br />
                JavaScript prend en charge différents types de boucles :<br />
                <br />
                - for - parcourt un bloc de code plusieurs fois<br />
                - for/in - parcourt les propriétés d'un objet<br />
                - for/of - parcourt les valeurs d'un objet itérable<br />
                - while - parcourt un bloc de code tant qu'une condition spécifiée est vraie<br />
                - do/while - parcourt également un bloc de code tant qu'une condition spécifiée est vraie<br />
                <br />
                Nous avons aussi la boucle forEach()<br />
                - forEach() - appelle une fonction pour chaque élément d'un tableau.<br />
                forEach()n'est pas exécuté pour les éléments vides.


            </p>

            <div class="ref-title column">
                <h2 id="forInOfEach">for | for/in | for/of | foreach()</h2>
                <span class="vert-ita">Déclare une boucle incrémentale</span>
            </div>
            <h3>Syntaxe</h3>
            <p>for (initialisation; condition; increment) { /* Traitements */ }</p>
            <h3>Description</h3>
            <p>
                Déclare une boucle incrémentale sur un compteur en assurant la gestion de l'incrément et de la sortie de
                la
                boucle.
                Une boucle for a une syntaxe particulière, identique à celle du langage C.<br />
                <span class="ex-code">
                    for (i=0; i&lt;10; i++) { ... }<br />
                    for (i=0; i&lt;10; i=i+2) { ... }<br />
                    for (i=10; i&gt;0; i--) { ... }<br />
                </span>
                <br />
                Le premier paramètre initialise la variable compteur.<br />
                Le second paramètre indique le critère qui permet de poursuivre la boucle. Dès que le critère est false
                la
                boucle est interrompue.<br />
                Le dernier argument indique comment le compteur évolue à chaque tour de boucle. Pour rappel <span class="vert">i++</span> est
                équivalent à <span class="vert">i = i + 1</span><br />
                <br />
                La boucle peut aussi être interrompue à tout moment par l'appel à <span class="orange">break</span>.<br />
                Le mot clé <span class="vert">for</span> est parfois associé à <span class="orange">in</span> pour
                parcourir
                l'ensemble des propriétés
                d'un objet.<br />
                <br />
                La boucle <span class="vert">for</span> est à utiliser dans le cas où le nombre d'incréments est connu à
                l'avance. Dans le cas
                contraire, la boucle <span class="orange">while</span> est plus adaptée.<br />
                La boucle <span class="orange">forEach()</span> est très pratique pour lancer un traitement sur chaque
                élément d'un tableau.<br />
            </p>
            <h3 id="for">Exemple 1 : Différentes boucles <span class="vert">for</span></h3>
            <h4>Code source</h4>
            <span class="ex-code">
                &lt;script type="text/javascript"&gt;<br />
                for (i=0; i&lt;10; i++) {<br />
                &emsp;&emsp;document.write(i + " ; ");<br />
                }<br />
                document.write("<BR>");<br />
                for (i=0; i&lt;10; i=i+2) {<br />
                &emsp;&emsp;document.write(i + " ; ");<br />
                }<br />
                document.write("<BR>");<br />
                for (i=10; i&gt;0; i--) {<br />
                &emsp;&emsp;document.write(i + " ; ");<br />
                }<br />
                &lt;/script&gt;<br />
            </span>
            <h4>Résultat</h4>
            <div class="fond-resultat">
                <script type="text/javascript">
                    for (i = 0; i < 10; i++) {
                        document.write(i + " ; ");
                    }
                    document.write("<BR>");
                    for (i = 0; i < 10; i = i + 2) {
                        document.write(i + " ; ");
                    }
                    document.write("<BR>");
                    for (i = 10; i > 0; i--) {
                        document.write(i + " ; ");
                    }
                </script>
            </div>
            <h3 id="foreach">Exemple 2 : Avec <span class="orange">foreach()</span></h3>
            <h4>Code source</h4>
            <span class="ex-code">
                HTML/CSS : plusieurs cartes avec la class"card" doivent se retourner au moment du click (un
                click/une carte)<br />
                <br />
                &lt;script&gt;<br />
                let card = document.querySelectorAll('.card');<br />
                <br />
                card.forEach(element => {<br />
                <br />
                &emsp;element.addEventListener( 'click', function() {<br />
                &emsp;&emsp;element.classList.toggle('flip');<br />
                &emsp;});<br />
                <br />
                });<br />
                &lt;/script&gt;<br />
            </span>

        </section>

        <script src="./js/ref.js"></script>
    </main>
</body>

</html>