<?php
include("head.php");
include("header.php");
?>

<body>
    <main>
        <div id="mood-content">
            <h2>Ce que je suis, ce qui me définit, mes centres d'intérêts</h2>
            <div id="moods"></div>
        </div>

        <h2>Mes Inspirations, ma veille</h2>
        <div class="content">
            <div>
                <img src="img/Enzo.jpg" alt="Développeur web, créateur et entrepreneur.">
            </div>
            <div>
                <h3>Le designeur du web</h3>
                <p>Le designer du web de son vrai prénom Enzo Ustariz est un développeur web, créateur et entrepreneur
                    qui propose sur son site internet des formations sur le développement web.<br>Il a également une
                    chaine youtube sur laquelle il poste trés régulièrement des petites vidéos tips.</p>
                <a href="https://www.ecole-du-web.net/" target="_blank" class="btn btn-purple"><i class="fas fa-link"></i></a>
                <a href="https://fr.linkedin.com/in/enzo-ustariz-9b517012a" target="_blank" class="btn btn-purple"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/c/LeDesignerduWeb/featured" target="_blank" class="btn btn-purple"><i class="fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="content" id="clemence">
            <div>
                <img src="img/clemence.jpg" alt="Chargée de communication Clémence Guillemet">
            </div>
            <div>
                <h3>Clémence Guillemet</h3>
                <p>Clémence Guillemet est étudiante en Master Management des Stratégies Marketing
                    et Communication à Reims. elle effectue ses études en alternance à la SNCF au poste de Chargée
                    de Communication Création de Contenu.<br>Elle propose sur son profil Linkedin des carrousel
                    simples, efficaces et pleins de conseils. </p>
                <a href="http://clemenceguillemet.fr/" target="_blank" class="btn btn-purple"><i class="fas fa-link"></i></a>
                <a href="https://www.linkedin.com/in/cl%C3%A9mence-guillemet/" target="_blank" class="btn btn-purple"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>


        <div class="content">
            <div>
                <img src="img/jhon.jpg" alt="Codeur, entrepreuneur et kiffeur">
            </div>
            <div>
                <h3>John Taieb</h3>
                <p>John Taieb , anciennement connu sous le nom de John Codeur, est un codeur
                    entrepreneur qui partage ses connaissances du code sur son site apprendre-a-coder.com, mais
                    également par le biais de sa chaîne YouTube.<br>Aujourd'hui, il voyage à travers le monde tout en
                    exerçant sa passion.</p>
                <a href="https://apprendre-a-coder.com/" target="_blank" class="btn btn-purple"><i class="fas fa-link"></i></a>
                <a href="https://www.linkedin.com/in/johntaieb/" target="_blank" class="btn btn-purple"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.youtube.com/channel/UC0FIKAE7xORm6Y91kWbg4cA" target="_blank" class="btn btn-purple"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </main>
    <?php
    include("footer.php");
    ?>
    <script>moodsCreate();</script>
</body>

</html>