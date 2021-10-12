<?php

$retour = mail('a.taddei@codeur.online', 'Envoi depuis la page Contact', $_POST['user_textarea']);
    if ($retour) 
    {
        echo 'Votre message a bien été envoyé.';
    }
    else
    {
        echo 'Il y a une erreur dans votre saisie.';
    }

?>