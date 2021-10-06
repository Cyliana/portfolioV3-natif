<?php
include("head.php");
include("header.php");
?>

<body>
    <main>
        <div id="mood-content">
            <h2>Contact</h2>
        </div>
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
    <?php
    include("footer.php");
    ?>
</body>

</html>