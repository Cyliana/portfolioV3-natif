<?php include("head.php"); ?>

<body>
    <?php include("header.php"); ?>

    <main>
        <div id="mood-content">
            <h2>Contact</h2>
        </div>
        <div id="section-contact">
            <div class="formulaire">
                <form  method='POST' action="mail.php">
                    <label>Votre nom</label></br>
                    <input type="text" id="nom" name ="user_firstname" required></br>
                    <label>Votre prenom</label></br>
                    <input type="text" id="prenom" name ="user_name" required></br>
                    <label>Votre e-mail</label></br>
                    <input type="email" id="mail" name="user_mail" placeholder="nom.prenom@exemple.fr" required></br>
                    <label>Votre message</label></br>
                    <textarea type ="text" id="message"  name="user_message" placeholder="Votre message" rows="5" col="10" required></textarea></br>
                    <input id="button" type="submit" class="btn-purple">
                </form>
            </div>
        </div>
    </main>
    <?php include("footer.php");?>
</body>

</html>