<?php
require "vendor/autoload.php";


    if (isset($_POST['submit'])
        && isset($_POST['user_name'])
        && isset($_POST['user_mail'])
        && isset($_POST['user_message'])) {

        $userName = htmlentities(strip_tags($_POST['user_name']));
        $userMail = htmlentities(strip_tags($_POST['user_mail']));
        $userMessage = htmlentities(strip_tags($_POST['user_message']));
        $to = "e.gaelle@codeur.online";
        $email_subject = "Contact Portfolio: $userName, $userMail". "\r\n";
        $email_body = "$userMessage". "\r\n";
        $headers = "From: noreply-e.gaelle@codeur.online". "\r\n";
        $headers = "Repondre à: $userMail";
        $success = mail($to, $email_subject, $email_body, $headers);
        header('Location: index.php?confirm=1');

    }
