<?php
    $firstname =    $_POST['user_firstname'];
    $name =         $_POST['user_name'];
    $email =        $_POST['user_mail'];
    $txt =          $_POST['user_message'];

    $retour = mail('a.taddei@codeur.online', $firstname.' '.$name, $txt, 'From :'.$email);
    if ($retour) 
    {
        print('Votre message a bien été envoyé !');
    }
    else
    {
        print('Il y a une erreur dans votre saisie.');
    }
?>