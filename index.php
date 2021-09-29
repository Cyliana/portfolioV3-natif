<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Mon portfolio de développeuse web : mes projets, les technologies que j'utilise, les « autorités » que je suis.">
    <title>Amanda Taddei</title>
    <script src="https://kit.fontawesome.com/d09bd1977e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" media="screen and (max-width: 576px)" href="styles-mobile.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a aria-current="page" href="index.html">Accueil</a></li>
                <li><a href="projets.html">Projets</a></li>
                <li><a href="moodboard.html">Moodboard</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>

        </nav>
    </header>
    
    <main>
        <div class="no-speech">
            <img src="./img/amanda1.png" alt="Une photo de moi.">
            <p id="essential">« Pas de grand discours, juste l'essentiel » - Amanda Taddei</p>
        </div>

        <h1>Mon CV, Mon parcours</h1>

        <div class="bloc-cv">
            <p>Cliquez ici pour le télécharger en version PDF :</p>
            <a href="./doc/cv-amanda-taddei.zip" class="btn-purple"><i class="fas fa-download"></i></a>
        </div>

        <div id="parcours">
            <div id="experiences">
                <h2>< Expériences ></h2><br>
                <p class="p">2020 / aujourd'hui - OnlineFormaPro <br>Formation pré-qualifiante et formation
                    qualifiante Developpement Web et Web mobile.</p><br>
                <p class="p">2019/2020 - Renault Trucks - Opératrice <br> Assemblage des radiateurs moteurs</p><br>
                <p class="p">2017/2019 - L'instant Bar Restaurant - Gérante <br>Mise en place, serveuse, gestion
                    administrative, gestion des stocks, entretien journalier des locaux.</p><br>
                <p class="p">2017 - Formation gestion d'entreprise - Chambre des métiers de l'ain</p><br>
                <p class="p">2013/2016 - CAF DE L'AIN - Conseillère offres de services<br>Accueillir
                    l'allocataire, conseiller et orienter vers le CAF.FR</p><br>
                <p class="p">2008/2011 - Int'air Medical - Opératrice<br>Assemblage d'équipement médical destiné aux hopitaux et à l'hospitalisation à domicile.</p><br>
                <p class="p">2007 - BEP Vente Action Marchande</p><br>
            </div>

            <div id="softskills" onclick="showSoftSkills();">
                <h2>< Softs Skills ></h2><br><br><br>
                <p class="p">Curieuse</p>
                <p class="p">Rigoureuse</p>
                <p class="p">Dynamique</p>
                <p class="p">Adaptable</p>
                <p class="p">Organisée</p>
            </div>
            <div id="technos" onclick="showTechnos();">
                <h2>< Les technologies ></h2><br>
                <p class="p">HTML 5</p>
                <p class="p">CSS 3</p>
                <p class="p">Javascript</p>
                <p class="p">PHP</p>
                <p class="p">MYSQL</p>
                <p class="p">Git</p>
                <p class="p">GitHub</p>
                <p class="p">Adobe Photoshop</p>
                <p class="p">Power Point</p>
            </div>
        </div>
    </main>
    <footer>
            <p>Amanda Taddei - Portfolio V3 - 2021</p>
    </footer>

    <script src="main.js"></script>
</body>

</html>