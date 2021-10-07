<?php
include("head.php");
include("header.php");
?>

<body>
    <main>
        <div id="overlay"></div>
        <div id="projectcontent">
            <h2>Mes différents projets réalisés seule ou en formation</h2>
        </div>
        <div id="container">
            <div id="gridcontent">
                <div class="celgrid" id="cel1" onclick="openModal('modal1');">
                </div>

                <div class="modal" id="modal1">
                    <p class="close" onclick="closeModal('modal1');">X</p>
                    <h3>Hack'cess</h3>
                    <p>Site sur l'accessibilité numérique<br>Réalisé principalement à l'aide de bootstrap et intégration de
                        plusieurs focntionnalités en JS.
                    </p>
                    <a href="https://amandat.promo-73.codeur.online/hackcess/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Bourg-en-Stress/accessibility" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel2" onclick="openModal('modal2');"></div>
                <div class="modal" id="modal2">
                    <p class="close" onclick="closeModal('modal2');">X</p>
                    <h3>Site Agence de voyage</h3>
                    <p>Page de site 'one page' réalisée en HTML et CSS3 pas à pas avec une formation en ligne.</p>
                    <a href="https://amandat.promo-73.codeur.online/travel/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/travel/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel3" onclick="openModal('modal3');"></div>
                <div class="modal" id="modal3">
                    <p class="close" onclick="closeModal('modal3');">X</p>
                    <h3>Une jungle</h3>
                    <p>Réalisation d'une illustration pour le site nevinator</p>
                    <a href="img/presentation-illustration-nevinator.jpg" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                </div>

                <div class="celgrid" id="cel4" onclick="openModal('modal4');"></div>
                <div class="modal" id="modal4">
                    <p class="close" onclick="closeModal('modal4');">X</p>
                    <h3>Mon Portfolio V1</h3>
                    <p>Première version de mon portfolio réalisé en HTML5 et CSS3 principalement.<br>Du JS a été intégrer
                        pour la responsivité du menu burger en format mobile avec l'aide du formateur.</p>
                    <a href="https://amandat.promo-73.codeur.online/portfolioV1/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/PortfolioV1" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel5" onclick="openModal('modal5');"></div>
                <div class="modal" id="modal5">
                    <p class="close" onclick="closeModal('modal5');">X</p>
                    <h3>Nevinator</h3>
                    <p>Site réalisé dans le cadre d'un stage pour l'association Nevers Libre.<br>Developpé avec Bootstrap.
                    </p>
                    <a href="https://amandat.promo-73.codeur.online/nevinator/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Bourg-en-Stress/nevinator" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel6" onclick="openModal('modal6');"></div>
                <div class="modal" id="modal6">
                    <p class="close" onclick="closeModal('modal6');">X</p>
                    <h3>Site L'FMR</h3>
                    <p>Projet réalisé entièrement en autodidacte pour une amie.<br>Mise en pratique des connaissances en
                        HTML5 et CSS3.<br>J'ai également essayé de respecter au maximum la responsivité avec les bases
                        acquises à ce sujet.</p>
                    <a href="https://amandat.promo-73.codeur.online/FMR/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/FMR" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel7" onclick="openModal('modal7');"></div>
                <div class="modal" id="modal7">
                    <p class="close" onclick="closeModal('modal7');">X</p>
                    <h3>Logo nevinator</h3>
                    <p>Réalisation d'un logo pour le site nevinator</p>
                    <a href="img/presentation-logo-nevinator.jpg" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                </div>

                <div class="celgrid" id="cel8" onclick="openModal('modal8');"></div>
                <div class="modal" id="modal8">
                    <p class="close" onclick="closeModal('modal8');">X</p>
                    <h3>Dance School Manager</h3>
                    <p>Réalisation d'une application de gestion d'école de danse</p>
                    <a href="https://amandat.promo-73.codeur.online/dsm/app/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/dsm" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel9" onclick="openModal('modal9');"></div>
                <div class="modal" id="modal9">
                    <p class="close" onclick="closeModal('modal9');">X</p>
                    <h3>Casse brique</h3>
                    <p>Réalisation d'un casse brique en JS objet</p>
                    <a href="https://amandat.promo-73.codeur.online/cassebrique/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/cassebrique/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel10" onclick="openModal('modal10');"></div>
                <div class="modal" id="modal10">
                    <p class="close" onclick="closeModal('modal10');">X</p>
                    <h3>Logo Playstation</h3>
                    <p>Réalisation d'un casse brique en JS objet</p>
                    <a href="https://amandat.promo-73.codeur.online/challenge-play/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/challenge-play/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel11" onclick="openModal('modal11');"></div>
                <div class="modal" id="modal11">
                    <p class="close" onclick="closeModal('modal11');">X</p>
                    <h3>Wild circus</h3>
                    <p>Réalisation d'une page responsive pour les selections d'entrée à la Wild Code school</p>
                    <a href="https://amandat.promo-73.codeur.online/wild-circus/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/wild-circus/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>

                <div class="celgrid" id="cel12" onclick="openModal('modal12');"></div>
                <div class="modal" id="modal12">
                    <p class="close" onclick="closeModal('modal12');">X</p>
                    <h3>Mon Portfolio V2</h3>
                    <p>Réalisation de mon portfolio 2ème version avec bootstrap</p>
                    <a href="https://amandat.promo-73.codeur.online/portfolioV2/" target="_blank" class="btn-purple"><i class="fas fa-link"></i></a>
                    <a href="https://github.com/Cyliana/portfolioV2/" target="_blank" class="btn-purple"><i class="fab fa-github"></i></a>
                </div>
            </div>
        </div>
    </main>
    <?php
    include("footer.php");
    ?>
</body>

</html>