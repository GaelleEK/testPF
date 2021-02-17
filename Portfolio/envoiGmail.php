<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "C:/Users/acs/code/testV2/password.php";
require "C:/Users/acs/code/testV2/vendor/autoload.php";

$mailsend = null;

    if (isset($_POST['submit'])
        && isset($_POST['user_name'])
        && isset($_POST['user_mail'])
        && isset($_POST['user_message'])) {

        $userName = htmlentities(strip_tags($_POST['user_name']));
        $userMail = htmlentities(strip_tags($_POST['user_mail']));
        $userMessage = htmlentities(strip_tags($_POST['user_message']));
        $mail = new PHPMailer();
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'gaelleelkadaoui';
        $mail->Password = $password;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->setFrom($userMail, $userName);
        $mail->addAddress('gaelleelkadaoui@gmail.com', 'GEK');
        $mail->Subject = "ContactPortfolio $userMail";
        $mail->Body = $userMessage;
        $mail->send();
        $mailsend = "ok";
    }

