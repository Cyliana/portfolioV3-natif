<?php
include("head.php");
include("header.php");
?>

<body>
    <main>
        <div class="no-speech">
            <img src="./img/amanda1.png" alt="Une photo de moi.">
            <p id="essential">« Pas de grand discours, juste l'essentiel » - Amanda Corraire</p>
        </div>

        <h2>Mon CV, Mon parcours</h2>

        <div class="bloc-cv">
            <p>Cliquez ici pour le télécharger en version PDF :</p>
            <a href="./doc/cv-amanda-corraire.zip" class="btn-purple"><i class="fas fa-download"></i></a>
        </div>

        <div id="parcours">
            <div id="experiences" onclick="showExperiences();">
                <h2>
                    < Expériences>
                </h2><br>
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
                <h2>
                    < Softs Skills>
                </h2><br><br><br>
                <p class="p">Curieuse</p>
                <p class="p">Rigoureuse</p>
                <p class="p">Dynamique</p>
                <p class="p">Adaptable</p>
                <p class="p">Organisée</p>
            </div>
            <div id="technos" onclick="showTechnos();">
                <h2>
                    < Les technologies>
                </h2><br>
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
    <?php
    include("footer.php");
    ?>
</body>

</html>