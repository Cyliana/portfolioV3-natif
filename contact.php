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
                    <input type="text" name ="user_firstname" pattern="[a-z][A-Z]"></br>
                    <label>Votre prenom</label></br>
                    <input type="text" name ="user_name" pattern="[a-z][A-Z]" ></br>
                    <label>Votre e-mail</label></br>
                    <input type="email" name="user_mail" placeholder="nom.prenom@exemple.fr" ></br>
                    <label>Votre message</label></br>
                    <textarea id="textarea" placeholder="Votre message" name="user_message" rows="5" col="10"></textarea></br>
                    <input id="button" type="submit" class="btn-purple">
                </form>
            </div>
        </div>
    </main>
    <?php include("footer.php");?>
</body>

</html>