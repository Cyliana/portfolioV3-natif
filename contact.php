<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta
        name="Mon portfolio de développeuse web : mes projets, les technologies que j'utilise, les « autorités » que je suis.">
    <title>Amanda Taddei</title>
    <script src="https://kit.fontawesome.com/d09bd1977e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <main class="container">

        <!-- SECTION NAVIGATION-->

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#ffffff;">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                    <div class="navig">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">À propos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="projets.html">Projets</a>
                            </li>
                        </ul>
                        <img src="img/amanda.png" id="medallion" alt="index.html">
                        <ul class="navbar-nav nav-item">
                            <li class="me-2">
                                <a class="nav-link" href="inspirations.html">Inspirations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="moodboard.html">Moodboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <h1 class="h1">Contact</h1>

        <div id="section-contact">
            <div class="formulaire">
                <form action="" methode='post'>
                    <label for="firstname">Votre nom</label></br>
                    <input type="text" id="firstname"></br>
                    <label for="name">Votre prenom</label></br>
                    <input type="text" id="name"></br>
                    <label for="name">Votre e-mail</label></br>
                    <input type="text" id="mail"></br>
                    <label for="textarea">Votre message</label></br>
                    <textarea id="textarea" name="textarea" rows="5" col="10"></textarea></br>
                    <button class="btn-purple">Envoyer</button>
                </form>
            </div>
        </div>
    </main>
    
    <footer>
        <div>
            <p>Amanda Taddei - Portfolio V2 - 2021</p>
        </div>
    </footer>

    <script src="main.js"></script>
</body>

</html>