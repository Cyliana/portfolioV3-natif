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
                <form  methode='post'action="./mail.php">
                    <label>Votre nom</label></br>
                    <input type="text" name ="user_firstname"></br>
                    <label>Votre prenom</label></br>
                    <input type="text" name ="user_name"></br>
                    <label>Votre e-mail</label></br>
                    <input type="email" name="user_mail" placeholder="nom.prenom@exemple.fr" ></br>
                    <label>Votre message</label></br>
                    <textarea id="textarea" placeholder="Votre message" name="user_textarea" rows="5" col="10"></textarea></br>
                    <input id="button" type="submit" class="btn-purple">
                </form>
            </div>
        </div>
    </main>

    <?php
    include("footer.php");
    ?>

</body>

</html>