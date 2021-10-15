<?php
    session_start();
    
    $firstname =    strip_tags($_POST['user_firstname']);
    $name =         strip_tags($_POST['user_name']);
    $email =        strip_tags($_POST['user_mail']);
    $txt =          strip_tags($_POST['user_message']);
    
    $retour = mail('a.taddei@codeur.online', $firstname.' '.$name, $txt, 'From :'.$email);
    if ($retour) 
    {
        $_SESSION['success'] = 'Votre message a bien été envoyé !';
        header('Location: contact.php');
    } 
    else
    {
        $_SESSION['error'] = 'Il y a une erreur dans votre saisie.';
        header('Location: contact.php');
    }
         
?>